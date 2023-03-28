<?php

namespace App\Http\Resources\version1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'type'=> $this->type,
            'email'=> $this->email,
            'address' => $this->address,
            'postcode' => $this->postcode,
        ];
    }
}
