<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $guarded = [];

	public static $companyInfo = [
		[
			'key' => 'office_time',
			'value' => 'Open Hours: Sat - Thu - 9:00 am - 6:00 pm'
		],
		[
			'key' => 'contact_n',
			'value' => '+880 1322846601'
		],
		[
			'key' => 'company_email',
			'value' => 'supremeglobalbd@gmail.com'
		],
		[
			'key' => 'info_email',
			'value' => 'info@supremeglobalbd.com'
		],
		[
			'key' => 'sales_email',
			'value' => 'sales@supremeglobalbd.com'
		],
		[
			'key' => 'head_office_location',
			'value' => 'Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212, Bangladesh'
		],
		[
			'key' => 'head_office_location_map',
			'value' => 'https://www.google.com/maps?q=23.779395286290402,90.42576674365971&z=14&output=embed'
		],
		[
			'key' => 'auto_bricks_location',
			'value' => 'A&A Auto Bricks Industries Ltd Kamatpara, Sakoa, Boda, Panchagarh, Bangladesh'
		],
		[
			'key' => 'auto_bricks_location_map',
			'value' => ''
		],
		[
			'key' => 'supreme_tea_location',
			'value' => ''
		],
		[
			'key' => 'supreme_tea_location_map',
			'value' => ''
		],
		[
			'key' => 'saudi_office_location',
			'value' => 'Abdul Rahman Al-Khuzai 5005, Al Marwah Jeddah, Saudi Arabia, 23545'
		],
		[
			'key' => 'saudi_office_location_map',
			'value' => ''
		],
	];
}
