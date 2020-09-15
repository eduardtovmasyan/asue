<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Subject extends JsonResource
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
            'parent_id'  => $this->parent_id,
            'teach_id'  => $this->teach_id,
            'amb_id'  => $this->amb_id,
            'sbjname'  => $this->sbjname,
            'sbj_diplom'  => $this->sbj_diplom,
            'dasich'  => $this->dasich,
            'has_practica'  => $this->has_practica,
            'sbjname_short'  => $this->sbjname_short,
            'sbjname_rus'  => $this->sbjname_rus,
            'sbjname_short_rus'  => $this->sbjname_short_rus,
            'sbjname_eng'  => $this->sbjname_eng,
            'sbjname_short_eng'  => $this->sbjname_short_eng,
        ];
    }
}
