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
        if(! is_null($this['avatar']))
        {
            return [
                'bio' => $this['bio'],
                'twitter_username' => $this['twitter_username'],
                'github_username' => $this['github_username'],
                'avatar' => URL::to('/') . $this['avatar'],
            ]; 
        }
        else{
            return [
                'bio' => $this['bio'],
                'twitter_username' => $this['twitter_username'],
                'github_username' => $this['github_username'],
                'avatar' => null,
            ]; 
        }   
    }
}
