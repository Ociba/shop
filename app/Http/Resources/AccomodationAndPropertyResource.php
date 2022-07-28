<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccomodationAndPropertyResource extends JsonResource
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
            'category'       =>$this->category,
            'property_size'  =>$this->property_size,
            'bedroom'        =>$this->bedroom,
            'bathroom'       =>$this->bathroom,
            'garage'         =>$this->garage,
            'location'       =>$this->location,
            'property_status'=>$this->property_status,
            'description'    =>$this->description,
            'price'          =>$this->price,
            'telephone'      =>$this->telephone,
            'photo'          =>asset('storage/accomodation_photos/' . $this->photo)
        ];
    }
}
