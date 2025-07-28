<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'My Laravel App')</title>
    @include('admin.layouts.head')
    <style>
        body {
            background: #f8f9fa;
        }

        .page {
            width: 8.5in;
            height: 12.8in;
            margin: 20px auto;
            background: white;
            padding: 20px 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        @media print {
            .no-print {
                display: none !important;
            }

            .page {
                margin: 0;
                box-shadow: none;
                width: 100%;
                height: auto;
            }

            body {
                background: white !important;
            }
        }
    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-info">
    <div class="page">
		<div class="row">
			<h1 class="text-center fs-2 mb-0">সৌদি আরবে জরুরী ভিক্তিতে লোক নিয়োগ চলছে</h1>
			<strong class="text-end" style="align-items: flex-end; padding-right: 70px !important;">
				<span>
					(আমাদের নিজস্ব কম্পানি)
				</span>
			</strong>
		</div>

        <div class="row justify-content-between my-1">
			<div class="col-md-6 text-center">
				<img src="{{ asset('images/logo/dar-kafaa.png') }}" class="img-fluid" style="height: 50px !important;">
				<div>
					<h5 class="mb-0">Dar Kafaa Al-Alia for Contracting</h5>
					<h6 class="mb-0">(সৌদি অফিস)</h6>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<img src="{{ asset('images/logo/supreme-global.png') }}" class="img-fluid" style="height: 50px !important;">
				<div>
					<h5 class="mb-0">Supreme Global</h5>
					<h6 class="mb-0">(বাংলাদেশ অফিস)</h6>
				</div>
			</div>
        </div>

        @php
            $jobs = [
                [
                    'col1' => '১',
                    'col2' => 'প্রজেক্ট ম্যানেজার',
                    'col3' => '৫',
                    'col4' => 'মধ্যপ্রাচ্যে কাজ করার অভিজ্ঞতা থাকতে হবে।',
                    'col5' => 'আলোচনা সাপেক্ষে',
                    'col6' => 'ফ্রি',
                    'col7' => 'বিএসসি ইঞ্জিনিয়ার পাস হতে হবে।',
                ],
				[
                    'col1' => '২',
                    'col2' => 'ইলেকট্রিশিয়ান',
                    'col3' => '৫',
                    'col4' => 'HT&LT কেবল সংযোগ, ঘরের তারের সংযোগ এবং GI কন্ডুইটের কাজে মধ্যপ্রাচ্যে ২ বছরের অভিজ্ঞতা থাকতে হবে।',
                    'col5' => '১৫০০+৩০০',
                    'col6' => 'ফ্রি',
                    'col7' => 'ডিপ্লোমা পাস হতে হবে।',
                ],
				// [
                //     'col1' => '২',
                //     'col2' => 'MEP Worker',
                //     'col3' => '৪',
                //     'col4' => 'ইলেক্ট্রোমেকানিক্যাল, HVAC, বৈদ্যুতিক, যান্ত্রিক, Plumbing কাজে মধ্যপ্রাচ্যে ২ বছরের অভিজ্ঞতা থাকতে হবে।',
                //     'col5' => '১৫০০+৩০০',
                //     'col6' => 'ফ্রি',
                //     'col7' => 'এস.এস.সি বা কারিগরি শিক্ষা পাস হতে হবে।',
                // ],
				// [
                //     'col1' => '৩',
                //     'col2' => 'সিসি টিভি টেকনিশিয়ান',
                //     'col3' => '৪',
                //     'col4' => 'ক্যামেরা সেটিং, কনফিগারেশন এবং অন্যান্য প্রযুক্তিগত কাজে মধ্যপ্রাচ্যে ২ বছরের অভিজ্ঞতা থাকতে হবে।',
                //     'col5' => '১৮০০+৩০০',
                //     'col6' => 'ফ্রি',
                //     'col7' => 'এস.এস.সি বা কারিগরি শিক্ষা পাস হতে হবে।',
                // ],
				[
					'col1' => '৩',
                    'col2' => 'ক্যাবল টার্মিনেশন',
                    'col3' => '৫',
                    'col4' => '৩-৫ বছরের অভিজ্ঞতা থাকতে হবে। ডিপ্লোমাদের অগ্রাধিকার দেওয়া হবে',
                    'col5' => '১৫০০+৩০০',
                    'col6' => 'ফ্রি',
                    'col7' => 'এস.এস.সি বা কারিগরি শিক্ষা পাস হতে হবে।',
                ],
				[
					'col1' => '৪',
					'col2' => 'লেবার',
					'col3' => '৫',
					'col4' => 'পাথর, প্লাস্টার, ব্লক, কংক্রিট, টাইলস, শাটারিং এবং অন্যান্য সিভিল কাজে ৩-৫ বছরের অভিজ্ঞতা থাকতে হবে।',
					'col5' => '১২০০+৩০০',
					'col6' => 'ফ্রি',
					'col7' => '',
				],
            ];
        @endphp

        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr class="table-info fw-bold">
                    <td>নং</td>
                    <td>পদের নাম</td>
                    <td>সংখ্যা</td>
                    <td>যোগ্যতা ও অভিজ্ঞতা</td>
                    <td>বেতন (SAR) + খাওয়া</td>
                    <td>থাকা</td>
                    <td>শিক্ষা</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $item)
                    <tr>
                        <td>{{ $item['col1'] }}</td>
                        <td>{{ $item['col2'] }}</td>
                        <td>{{ $item['col3'] }}</td>
                        <td>{{ $item['col4'] }}</td>
                        <td>{{ $item['col5'] }}</td>
                        <td>{{ $item['col6'] }}</td>
                        <td>{{ $item['col7'] }}</td>
                    </tr>
                @endforeach
				<tr>
					<td colspan="2">মোট:</td>
					<td>২০</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="7">
						বিশেষ দ্রষ্টব্য: সকল কর্মীকে কোম্পানি কর্তৃক প্রদত্ত যেকোনো ট্রেডে কাজ করার জন্য প্রতিশ্রুতিবদ্ধ থাকতে হবে।
						 {{-- ক্রমিক নং ১, ২ ও ৩ পদে মধ্যপ্রাচ্যে অধিক যোগ্যতাসম্পন্ন প্রার্থীর জন্য বেতন ও অন্যান্য সুবিধাদি আলোচনা যোগ্য। --}}
					</td>
				</tr>
            </tbody>
        </table>

        <div class="row justify-content-between">
            @php
                $left = [
                    'চুক্তির মেয়াদ ২ বছর (নবায়ন যোগ্য)।',
                    'ডিউটিঃ ১০ (দশ) ঘন্টা।',
                    'ওভার টাইম কোম্পানীর নিয়ম অনুযায়ী।',
                    'বয়সঃ ২১-৩৮ বছর। (ট্রেড – ৪০ বছর পর্যন্ত)।',
                    'আকামা, যাতায়াত ও চিকিৎসা কোম্পানি বহন করবে।',
                    'অন্যান্য সুযোগ-সুবিধা সৌদি আরবের শ্রম আইন অনুযায়ী হবে।',
                ];
                $right = [
                    'অরিজিনাল পাসপোর্ট।',
                    '৪ কপি পাসপোর্ট সাইজ ছবি।',
                    'NID এর ফটোকপি ।',
                    'অভিজ্ঞতার সনদপত্র ।',
                    'শিক্ষাগত যোগ্যতার সনদপত্র ।',
                    'জীবন-বৃত্তান্ত।'
                ];
            @endphp
            <div class="col-md-7">
                <h5>শর্তাবলী:-</h5>
                <ul>
                    @foreach ($left as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-5">
                <h5>এখন যা লাগবে:-</h5>
                <ul>
                    @foreach ($right as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="{{ asset('images/job/worker1.png') }}" class="img-fluid rounded-1" style="height: 110px;">
            </div>
            <div class="col-md-6">
                <div class="rounded-3 py-4 px-0 border text-bg-light row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h5>মোঃ সাইদুল ইসলাম</h5>
                        <h6>+880 1822680366</h6>
                    </div>
                    {{-- <div class="col-md-6">
                        <h5>মোঃ মনোয়ার হুসাইন</h5>
                        <h6>+880 01322846601</h6>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/job/worker2.png') }}" class="img-fluid rounded-1" >
            </div>
        </div>
    </div>
</body>

</html>