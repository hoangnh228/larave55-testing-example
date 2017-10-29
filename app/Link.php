<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	protected $fillable = ['title', 'url', 'description'];

    public function getPathAttribute()
    {
        return '/links/detail/' . $this->id;
    }
}
