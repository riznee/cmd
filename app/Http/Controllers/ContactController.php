<?php

namespace App\Http\Controllers;

use App\Repositries\ContactRepository;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;

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
        try {
            $message =  $this->repository->read($id);
            $permisson = $this->permissonName;
            $action = true;
            return view('contactus.show', compact('message', 'permisson', 'action', 'id'));
        } catch (\Exception $exeption) {
            return redirect()->route('contacts.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }
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
        dd($id);
    }
}
