<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class personResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this ->id,
            'user_email'=>$this ->user_email,
            'created_at'=>$this ->created_at
        ];
    }
}
