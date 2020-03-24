<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title, 
            "url" => $this->url,
            "top" => $this->top,
            "left" => $this->left,
            "bottom" => $this->bottom,
            "right" => $this->right,
        ];
    }
}
