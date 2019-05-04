<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Present extends Model
{
    public $fillable = ['title','description','links','image_url'];

    public function url()
    {
    	return $this->id ? 'presents.update' : 'presents.store';
    }

    public function method()
    {
    	return $this->id ? 'PUT' : 'POST';
    }
}
