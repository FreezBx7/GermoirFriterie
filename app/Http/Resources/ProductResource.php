<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name_Prod' => $this->name_Prod,
            'price_Prod' => $this->price_Prod,
            'size_Prod' => $this->size_Prod,
            'cat_Prod' => $this->cat_Prod
        ];
    }
}
