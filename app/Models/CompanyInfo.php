<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
	protected $guarded = [];

	public function company()
    {
        return $this->belongsTo(Company::class, 'company_id')->withDefault();
    }

	public static $companyInfo = [
		1 => [
            'office_time'              => 'Open Hours: Sat - Thu - 9:00 am - 6:00 pm',
            'contact_number'           => '+880 1322846601',
            'company_email'            => 'supremeglobalbd@gmail.com',
            'info_email'               => 'info@supremeglobalbd.com',
            'sales_email'              => 'sales@supremeglobalbd.com',
            'head_office_location'     => 'Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212, Bangladesh',
            'head_office_location_map' => 'https://www.google.com/maps?q=23.779395286290402,90.42576674365971&z=14&output=embed',
            'send_email_us'            => '',
            'facebook'                 => '',
            'instagram'                => '',
            'linkedin'                 => '',
            'youtube'                  => '',
            'twitter'                  => '',
		],
		2 => [
            'supreme_tea_location'     => 'Chakravita, Jagdal, Panchagarh, Bangladesh',
            'supreme_tea_location_map' => 'https://www.google.com/maps?q=26.431240691008355,88.57204580791227&z=14&output=embed',
		],
		3 => [
            'auto_bricks_location'     => 'A&A Auto Bricks Industries Ltd Kamatpara, Sakoa, Boda, Panchagarh, Bangladesh',
            'auto_bricks_location_map' => 'https://www.google.com/maps?q=26.176291782230138,88.61606125376956&z=14&output=embed',
		],
		4 => [
            'saudi_office_location'     => 'Building-4, Level-4, Abdul Rahman Al Khuzayi St, Al Marwah, Jeddah-23545, Jeddah, Kingdom of Saudi Arabia',
            'saudi_office_location_map' => 'https://www.google.com/maps?q=21.614583,39.210944&z=14&output=embed',
            'saudi_office_help_desk'    => '+966 577620401',
		],
	];
}
