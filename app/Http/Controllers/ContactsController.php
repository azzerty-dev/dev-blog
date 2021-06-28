<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $request){

        $contacts = new Contacts();
        $contacts->Name = $request->input('Name');
        $contacts->Theme = $request->input('Theme');
        $contacts->Email = $request->input('Email');
        $contacts->Message = $request->input('Message');
        $contacts->save();

        $request->session()->flash('submit', 'Ваша заявка успешна отпралена!');

        return redirect()->route('contacts');
    }
}
