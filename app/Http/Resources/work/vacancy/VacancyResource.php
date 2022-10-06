<?php

namespace App\Http\Resources\work\vacancy;

use Illuminate\Http\Resources\Json\JsonResource;

class VacancyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'salary' => $this->salary,
            'phone' => $this->phone,
            'schedule' => $this->schedule,
            'profession' => $this->profession,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
