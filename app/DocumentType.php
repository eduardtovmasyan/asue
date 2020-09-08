<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    public $table = 'lms_document_type';
    public $timestamps = false;

    public function document()
    {
        return $this->belongsTo(Document::class, 'id', 'document_id');
    }
}
