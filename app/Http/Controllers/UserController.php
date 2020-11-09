<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositries\UserRepository;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\ResetRequest;
use App\Http\Requests\User\ResetPasswordRequest;
use App\Mail\VerifyUser;
use App\Mail\PasswordReset;

// use App\Mail\MailNotify;
use Mail;
use SebastianBergmann\Environment\Console;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $permissonName='users';

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
     } 

    public function index(Request $request)
    {
        $data = $this->repository->getusers();
        return view('dark.users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->repository->getRoles();
        return view('users.create', compact('roles'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->repository->store($request);
        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->repository->find($id);
        return view('users.show', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->repository->find($id);
        $roles = $this->repository->getRoles();;
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('users.edit', compact('user', 'roles', 'userRole'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateUserRequest $request, $id)
    {
        $user = $this->repository->update($request, $id);
        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

    public function register()
    {
        return view($this->theme.'.auth.signup');
    }

    public function registerRequest(StoreUserRequest $request)
    {
        $user = $this->repository->register($request);
        Mail::to($user->email)->send(new VerifyUser($user));
        return redirect()->route('home')
            ->with('success', 'Email is sent to your email account to for verification');
    }

    public function userVerification($token)
    {
        $status = $this->repository->verifyUser($token);
        if ($status){
            return redirect()->route('home')
            ->with('success', 'Your account is verified you can login ');
        }
        return redirect()->route('home')
        ->with('danger', 'We are unable to verify you email address');
    }

    public function resetPasswordView()
    {
        return view($this->theme.'.auth.reset');
        
    }

    public function sendResetRequest(ResetRequest $request)
    {
        $user = $this->repository->resetRequest($request);
        if(isset($user)){

            Mail::to($user->email)->send( new PasswordReset($user));
            return redirect()->route('home')
            ->with('success', 'Email is sent to your email reset the password');

        } else{
            return redirect()->route('home')
            ->with('warning', 'We are unable to verify you account');
        }
    }

    Public function resetRequestVerified($token)
    {

        $resetRequestVerified = $this->repository->passwordResetVerificatio($token);
        if($resetRequestVerified =='null')
        {
            return redirect()->route('home')->with('warning', 'Unable find you request please try again');
        }
        $status = $this->repository->getUserMail($resetRequestVerified);
        switch ($status) {
            case "not-found":
                return redirect()->route('home')
                    ->with('warning', 'Your requested token expired');
                break;
            case "expired":
                return redirect()->route('home')
                    ->with('warning', 'Your requested token expired');
                break;
            case "user-not-found":
                return redirect()->route('home')
                    ->with('warning', 'We are unbale to find you');
                break;
        }
        $user = $status;
        return view($this->theme.'auth.resetpassword', compact('user'));

    }

    public function resetPassword(ResetPasswordRequest $request)
    {

        $user = $this->repository->findByemail($request->email);
        try {
            $this->repository->resetPassword($user, $request);
            return redirect()->route('home')
                   ->with('success', 'your password has been reset');
        } catch (\Exception $exeption)
        {
            return redirect()->route('home')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }
}
