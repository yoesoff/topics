<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Topic extends JsonResource
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
            'username' => $this->username, 
            'content' => $this->content, 
            'votes_up' => $this->votes()->where('status', 'up')->get(),
            'votes_down' => $this->votes()->where('status', 'down')->get(),
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
            'updated_at' => $this->updated_at
        ];
    }
}
