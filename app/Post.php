<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

	/*set for Eloquent array functionality*/
protected $fillable = [
	'title',
	'content'
];
}
