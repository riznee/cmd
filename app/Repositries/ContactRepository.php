<?php
 
 namespace App\Repositries;

 use App\Models\Contact;


 class ContactRepository  extends BaseRepository{

    public function __construct(Contact $contact)
    {
        parent::__construct($contact);
    }


    public function read($id)
    {
        $data=$this->model->findOrFail($id);
        $data->update(["read" => 1]);
        return $data;
    }
 }