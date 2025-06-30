<?php

namespace Database\Seeders;

use App\Models\CompanyInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyInfoSeeder extends Seeder
{
	public function run(): void
	{
		DB::table('company_infos')->truncate();

		foreach (CompanyInfo::$companyInfo as $info) {
			CompanyInfo::create([
				'key' => $info['key'],
				'value' => $info['value']
			]);
		}
	}
}
