<?php

namespace App\Http\Controllers;

use App\Repositries\ContactRepository;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;
use App\Http\Requests\Contact\MailContactRequest;
use Illuminate\Support\Facades\Log;
use Mail;

use App\Mail\ReplayToCustomer;

class ContactController extends Controller
{
    public $perpage = 5;
    public $permissonName = 'contactus';


    public $headers = array(

        array('title' => 'Name', 'value' => 'name'),
        array('title' => 'Email', 'value' => 'email'),
        array('title' => 'Subject', 'value' => 'subject'),
        array('title' => 'Read', 'value' => 'read', 'type' => 'boolen'),
        array('title' => 'Created At', 'value' => 'created_at'),
        array('title' => 'Updated At', 'value' => 'updated_at')

    );

    public $headers_show = array(

        array('title' => 'Name', 'value' => 'name'),
        array('title' => 'Email', 'value' => 'email'),
        array('title' => 'Created At', 'value' => 'created_at'),
        array('title' => 'Updated At', 'value' => 'updated_at'),
        array('title' => 'Subject', 'value' => 'subject'),
        array('title' => 'Message', 'value' => 'message')
    );

    public $slotfeild = array(
        'value' => 'read',
    );


    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
        $this->repository->perpage = $this->perpage;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $contacts = $this->repository->getall();
        $action = true;
        $data = array('true' => 'Read', 'false' => 'Unread');
        return view('contactus.index', compact('headers', 'contacts', 'permisson', 'action', 'data'));
    }

    public function show($id)
    {
        $permisson = $this->permissonName;
        $action = true;
        $message =  $this->repository->read($id);
        return view('contactus.show',compact('message','permisson','action', 'id'));  
    }
    

    public function update(UpdateContactRequest $request, $id)
    {

        return view('error.index');
    }

    public function edit($id, $request)
    {
        return view('error.index');
    }

    public function create()
    {
        return view('error.index');
    }

    public function destroy($id)
    {
        return view('error.index');
    }

    public function reply($id)
    {
        $message =  $this->repository->read($id);
        return view('contactus.replay',compact('message','id')) ;
        
    }
    
    public function sendMail(MailContactRequest $request, $id)
    {
        $user =  $this->repository->read($id);
        $message = $request;
        Mail::to($user->email)->send( new ReplayToCustomer($user, $message));
        return redirect()->route('contactus.index')
        ->with('success', 'Email is sent to your email reset the password');
    }
}
