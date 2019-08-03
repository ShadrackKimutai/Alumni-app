<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumni  extends Authenticatable
{
	protected $fillable = [
		'id',
		'adm',
		'fullname',
		'dept',
		'course',
		'level',
		'feyear',
		'feser',
		'idnum',
		'current_address',
		'permanent_address',
		'email',
		'mobile',
		'occupation',
		'occupation_place',
		'nextofkin',
		'nextofkinadd',
		'nextofkinphone',
		'placeofworkadd',
		'supervisoradd'

	];
}
