<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
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
            'hari' => $this->hari,
            'mulai' => $this->waktuMulai,
            'akhir' => $this->waktuBerakhir,
        ];
    }
}
