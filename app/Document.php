<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $table = 'lms_documents';
    public $timestamps = false;

    public function types()
    {
        return $this->hasMany(DocumentType::class, 'document_id', 'id');
    }
}
