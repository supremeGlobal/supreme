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
			'url' => '/global',
			'name' => 'Supreme Global',
			'image' => 'mainLogo.png',
		],
		[
			'url' => '/supreme-tea',
			'name' => 'Supreme Tea Limited',
			'image' => 'logo3.png',
		],
		[
			'url' => '/auto-bricks',
			'name' => 'A&A Auto Bricks Industries Ltd',
			'image' => 'logo2.png',
		],
		[
			'url' => '/dar-kafaa',
			'name' => 'Dar Kafaa Al-Alia',
			'image' => 'logo1.png',
		],
		[
			'url' => '/supreme-agro',
			'name' => 'Supreme Agro',
			'image' => 'logo6.png',
		],
		[
			'url' => '/north-point',
			'name' => 'North Point Medical College & Hospital Ltd.',
			'image' => 'logo7.png',
		],
		/*
		[
			'name' => 'North Palace Hotel & Resort Ltd.',
			'image' => 'logo8.png',
		],
		*/
		[
			'url' => '/garden-inn',
			'name' => 'Garden Inn Resort & Amusement',
			'image' => 'logo5.png',
		],
		[
			'url' => '/alif-co',
			'name' => 'ALIF & Co.',
			'image' => 'logo4.png',
		],
	];
}
