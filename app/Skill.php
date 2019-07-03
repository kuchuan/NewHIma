<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
		protected $table = 'skills';

		protected $guarded = array('id');

		public $timestamps = true;

		protected $fillable = [
			'id',
			'user_id',
			'toggle_user',
			'skill_category',
			'skill_name',
			'skill_experience',
			'skill_get',
			'skill_explanation',
			'skill_enthusiasm',
			'skill_area',
			'skill_language',
			
			'skill_picture',
			'interest01',
			'interest02',
			'interest03',
			'interest04',
			'interest05',
			'interest06',
			'interest07',
			'interest08',
			'interest09',
			'interest10',
			'interest11',
			'interest12',
			'interest13',
			'interest14',
			'interest15',
			'interest16',
			'interest17',
			'interest18',
			'interest19',
			'interest20',

}
