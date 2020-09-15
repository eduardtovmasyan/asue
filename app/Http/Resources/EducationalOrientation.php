<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EducationalOrientation extends JsonResource
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
            'name'  => $this->name,
            'kamyntrovi'  => $this->kamyntrovi,
            'krt_id'  => $this->krt_id,
            'arder_id'  => $this->arder_id,
            'krtamas_type'  => $this->krtamas_type,
            'workman'  => $this->workman,
            'date_time'  => $this->date_time,
            'partadir'  => $this->partadir,
            'practica'  => $this->practica,
            'name_eng'  => $this->name_eng,
        ];
    }
}
