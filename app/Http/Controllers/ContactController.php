<?php

namespace App\Http\Controllers;

use Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactPage()
    {
        $documents = Contact::index();

        return view('contact')->with('documents', $documents);
    }

    public function getDocTypes($document_id)
    {
        return Contact::getTypes($document_id);
    }
}
