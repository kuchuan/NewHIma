<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_user extends Model
{
    //
		protected $table = 'room_user';

		protected $guarded = array('id');

	  public $timestamps = true;

	  protected $fillable = [
		  	'skill_id', 'user_id',
  ];
}
