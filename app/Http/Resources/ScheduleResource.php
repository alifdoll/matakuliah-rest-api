<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

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
            'mulai' => Carbon::createFromFormat('H:i:s', $this->waktuMulai)->format('h:i'),
            'akhir' => Carbon::createFromFormat('H:i:s', $this->waktuBerakhir)->format('h:i'),
        ];
    }
}
