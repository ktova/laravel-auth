<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class Profile extends JsonResource
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
            'bio' => $this->id,
            'twitter_username' => $this->twitter_username,
            'github_username' => $this->github_username,
            'avatar' => URL::to('/') . $this->avatar,
        ];    
    }
}
