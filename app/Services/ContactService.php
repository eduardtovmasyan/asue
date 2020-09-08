<?php

namespace App\Services;

use App\Staff;
use App\Document;
use App\DocumentType;
use App\Notification;
use App\StudentApplication;
use Illuminate\Support\Facades\Auth;

class ContactService
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();

        return $documents;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getTypes($document_id)
    {
        $document = Document::findOrFail($document_id);

        $document = $document->types()->get();
        
        return $document;
    }

    public function save($request)
    {
        $facultet_id = Auth::user()->information->facultet_id;
        $staff = Staff::select('user_id')->where('status', 1)
                        ->where('role_id', 7)
                        ->where('position_id', $facultet_id)->first();
        $docType = DocumentType::findOrFail($request->docType_id);

        $application = StudentApplication::create([
            'document_type_id' => $request->docType_id,
            'description' => $request->description,
            'status' => 0,
            'stud_id' => Auth::user()->information->stud_id,
        ]);

        Notification::create([
            'from' => Auth::user()->information->stud_id,
            'to_uname' => $staff->user_id,
            'status' => 0,
            'heading' => $docType->name,
            'text' => $request->description,
            'cr_date' => now(),
            'read_date' => now(),
        ]);

        return $application;
    }
}