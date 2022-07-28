<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            'item_name'      =>$this->item_name,
            'price'          =>$this->price,
            'description'    =>$this->description,
            'photo'          =>asset('storage/shop_items_photos/' . $this->photo)
        ];
    }
}
