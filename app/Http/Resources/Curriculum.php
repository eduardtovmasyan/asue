<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Curriculum extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'teach_program'  => $this->teach_program,
            'teach_type'  => $this->teach_type,
            'masn_id'  => $this->masn_id,
            'year'  => $this->year,
            'mounths'  => $this->mounths,
            'confirm_date'  => $this->confirm_date,
            'status'  => $this->status,
        ];
    }
}
