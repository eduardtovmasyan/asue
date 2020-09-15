<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GraphicLoadMain extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'curriculum'  => Curriculum::make($this->curriculum),
            'half_year' => $this->half_year,
            'type' => $this->type,
            'krtamas' => EducationalOrientation::make($this->educationalOrientation),
            'chair' => $this->ambion,
            'subject' => Subject::make($this->subject),
        ];
    }
}
