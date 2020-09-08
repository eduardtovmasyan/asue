<?php

namespace App\Services;

use App\Document;

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
}