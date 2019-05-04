<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PresentsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($element){
                return [
                    "title" => $element->title,
                    "id" => $element->id,
                    "presentDescription" => $element->description,
                    "presentLinks" => $element->links,
                    "image" => $element->image_url
                ];
            })
        ];
    }
}
