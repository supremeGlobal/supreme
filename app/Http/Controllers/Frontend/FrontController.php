<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Content;
use App\Models\CompanyClient;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

	private function faceData($company_id)
	{
		return [
            'sliders'  => Slider::whereCompanyId($company_id)->whereStatus('active')->get(),
            'aboutUs'  => AboutUs::whereCompanyId($company_id)->whereStatus('active')->first(),
            'contents' => Content::whereCompanyId($company_id)->whereStatus('active')->get(),
            'clients'  => CompanyClient::whereCompanyId($company_id)->whereStatus('active')->with('client')->get()->pluck('client'),
		];
	}

    public function home()
    {
		$data['sliders'] = Slider::where('status', 'active')->get();
        $data['clients'] = CompanyClient::whereStatus('active')->with('client')->get()->pluck('client');

        return view('welcome', $data);
    }

	public function global($company_id = 1)
	{
		return view('frontend.pages.global', $this->faceData($company_id));
	}

	public function supremeTea($company_id = 2)
    {
        return view('frontend.pages.tea', $this->faceData($company_id));
    }

	public function autoBricks($company_id = 3)
    {
        return view('frontend.pages.auto-bricks', $this->faceData($company_id));
    }

	public function darKafaa($company_id = 4)
    {
        return view('frontend.pages.dar-kafaa', $this->faceData($company_id));
    }

	public function supremeAgro($company_id = 5)
    {
        return view('frontend.pages.agro', $this->faceData($company_id));
    }

	public function northPoint($company_id = 6)
    {
        return view('frontend.pages.north-point', $this->faceData($company_id));
    }

	public function gardenInn($company_id = 7)
    {
        return view('frontend.pages.garden-inn', $this->faceData($company_id));
    }

	public function alifCo($company_id = 8)
    {
        return view('frontend.pages.alif-co', $this->faceData($company_id));
    }
	
	public function job()
    {
        return view('frontend.pages.job');
    }
}