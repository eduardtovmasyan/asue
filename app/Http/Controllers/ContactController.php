<?php

namespace App\Http\Controllers;

use Contact;
use App\Http\Requests\StudentApplicationValidationRequest;
use Illuminate\Support\Facades\Redirect;

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

    public function saveStudentApplication(StudentApplicationValidationRequest $request)
    {
    	return Contact::save($request);
    }
}
