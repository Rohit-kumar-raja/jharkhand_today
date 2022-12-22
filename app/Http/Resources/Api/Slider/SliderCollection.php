<?php

namespace App\Http\Resources\Api\Slider;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Helper\Helper;

class SliderCollection extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'description' => $this->description,
            'is_deleted' => $this->is_deleted,
            
            'media'           => !empty($this->media) ?  $this->media->getUrl() : "",
            
        ];
    }
}
