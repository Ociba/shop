<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemsWithDiscountResource extends JsonResource
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
            'discount'       =>$this->discount,
            'new_price'       => $this->calculateDiscountAmount($this->price),
            'description'    =>$this->description,
            'photo'          =>asset('storage/shop_items_photos/' . $this->photo)
        ];
    }

    private function calculateDiscountAmount($product_amount){
        $percetage =\DB::table('shops')->where('discount','!=',null)->value('discount');
        $percentage_discount =$percetage * 0.01;
        $calculate_percentage_mount =$product_amount * $percentage_discount;
        $new_discount_amount =$product_amount-$calculate_percentage_mount;
        return $new_discount_amount;
    }
}
