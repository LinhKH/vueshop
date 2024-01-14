<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->whenNotNull($this->title),
            'price' => $this->whenNotNull($this->price),
            'quantity' => $this->whenNotNull($this->quantity),
            'quantity' => $this->whenNotNull($this->quantity),
            'description' => $this->whenNotNull($this->description),
            'brand' => $this->whenLoaded('brand'),
            'category' => $this->whenLoaded('category'),
            'product_images' => $this->whenLoaded('product_images'),
        ];
    }
}
