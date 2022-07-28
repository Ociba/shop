<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduceResource extends JsonResource
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
            'id'             =>$this->id,
            'produce_name'   =>$this->produce_name,
            'produce_type'   =>$this->produce_type,
            'quantity'       =>$this->quantity,
            'price'          =>$this->price,
            'phone_number'   =>$this->phone_number,
            'description'    =>$this->description,
            'image'          =>asset('storage/produce_photos/' . $this->image)
        ];
    }
}
