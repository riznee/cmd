<?php
 
 namespace App\Repositries;

 use App\Models\Contact;


 class ContactRepositry  extends BaseRepositry{

    public function __construct(Contact $contact)
    {
        parent::__construct($contact);
    }
 }