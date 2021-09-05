<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\GroupResource;
use App\Group;
class LectureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $group = Group::with('lecture')->get();
        return [
            'kode' => $this->kode,
            'nama' => $this->nama,
            'sks' => $this->sks,
            'ujian' => $this->ujian,
            'kelas' => [
                GroupResource::collection($this->groups),
            ],
        ];
    }
}
