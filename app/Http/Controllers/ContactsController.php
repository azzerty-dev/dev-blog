<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $data){

        $contacts = new Contacts();
        $contacts->Name = $data->input('Name');
        $contacts->Theme = $data->input('Theme');
        $contacts->Email = $data->input('Email');
        $contacts->Message = $data->input('Message');

        $contacts->save();

    }
}
