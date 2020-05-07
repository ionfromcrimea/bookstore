<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
//use Illuminate\Http\Response;

class AuthorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
//            'data' => [
                'id' => (string)$this->id,
                'type' => 'authors',
                'attributes' => [
                    'name' => $this->name,
                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at,
                ]
//            ]
        ];
    }
}
