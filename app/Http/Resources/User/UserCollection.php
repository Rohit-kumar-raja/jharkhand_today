<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Helper\Helper;

class UserCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this-> id ?? '',
            'name'  => ucwords($this->name) ?? '',
            'email'  => strtolower($this->email) ?? '',
            'role_name'  => ucwords($this->role_name) ?? '',
        ];
    }
}
