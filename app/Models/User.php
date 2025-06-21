<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use HasFactory, Notifiable;
	protected $fillable = [
		'name',
		'email',
		'password',
	];

	protected $hidden = [
		'password',
		'remember_token',
	];

	protected function casts(): array
	{
		return [
			'email_verified_at' => 'datetime',
			'password' => 'hashed',
		];
	}

	public static $company = [
		[
			'url' => 'global',
			'name' => 'Supreme Global',
			'image' => 'supreme-global.png',
		],
		[
			'url' => 'supreme-tea',
			'name' => 'Supreme Tea Limited',
			'image' => 'supreme-tea.png',
		],
		[
			'url' => 'auto-bricks',
			'name' => 'A&A Auto Bricks Industries Ltd',
			'image' => 'auto-bricks.png',
		],
		[
			'url' => 'dar-kafaa',
			'name' => 'Dar Kafaa Al-Alia',
			'image' => 'dar-kafaa.png',
		],
		[
			'url' => 'supreme-agro',
			'name' => 'Supreme Agro',
			'image' => 'supreme-agro.png',
		],
		[
			'url' => 'north-point',
			'name' => 'North Point Medical College & Hospital Ltd',
			'image' => 'north-point.png',
		],
		/*
		[
			'url' => 'north-palace',
			'name' => 'North Palace Hotel & Resort Ltd',
			'image' => 'north-palace.png',
		],
		*/
		[
			'url' => 'garden-inn',
			'name' => 'Garden Inn Resort & Amusement',
			'image' => 'garden-inn.png',
		],
		[
			'url' => 'alif-co',
			'name' => 'ALIF & Co.',
			'image' => 'alif-co.png',
		],
	];
}
