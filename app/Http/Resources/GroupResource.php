<?php

namespace App\Http\Resources;

use App\Http\Resources\ScheduleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return dd($this);

        return [
            'id' => $this->id_mk,
            'kode' => $this->kode,
            'kuota' => $this->kuota,
            'jadwal' => ScheduleResource::collection($this->schedules)
        ];
    }
}
