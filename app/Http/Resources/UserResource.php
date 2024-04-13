<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'type' => 'article',
                'id' => (string)$this->resource->getRouteKey(),
                'attributes' => [
                    'name' => $this->resource->name,
                    'email' => $this->resource->slug,
                    'created_at' => $this->resource->created_at,
                    'updated_at' => $this->resource->updated_at,
                ],
                'link' => [
                    'self' => route('api.articles.show', $this->resource)
                ]
            ]
        ];
    }
}
