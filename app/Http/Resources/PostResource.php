<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $square=4*4;
        return [
            'id' => $this->id,
            'barang' => $this->barang,
            'deskripsi_barang' => $this->deskripsi_barang,
            'whatever' => $square,
            'created_at' => date_format($this->created_at, "Y/m/d H:i:s",
            )
        ];
    }
}
