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
            'credit' => $this->credit,
            's_all' => $this->s_all,
            's1' => $this->s1,
            's2' => $this->s2,
            's3' => $this->s3,
            'sljy' => $this->sljy,
            'ct_1' => $this->ct_1,
            'ct_2' => $this->ct_2,
            'inqn_work' => $this->inqn_work,
            'usm_1' => $this->usm_1,
            'usm_2' => $this->usm_2,
        ];
    }
}
