@php
    $company = [
        [
            'name' => 'Dar Kafaa Al-Alai',
            'image' => 'logo1.png',
        ],
        [
            'name' => 'A&A Auto Bricks Industries Ltd',
            'image' => 'logo2.png',
        ],
        [
            'name' => 'Supreme Tea Limited',
            'image' => 'logo3.png',
        ],
        [
            'name' => 'ALIF & Co.',
            'image' => 'logo4.png',
        ],
        [
            'name' => 'Garden Inn Resort & Amusement',
            'image' => 'logo5.png',
        ],
        [
            'name' => 'SUPREME AGRO',
            'image' => 'logo6.png',
        ],
        [
            'name' => 'North Point Medical College & Hospital Ltd.',
            'image' => 'logo7.png',
        ],
        [
            'name' => 'North Palace Hotel & Resort Ltd.',
            'image' => 'logo8.png',
        ],
    ];
@endphp

<section id="client">
    <div class="container-fluid text-center">
        <h2 class="fw-bold">Our Clients</h2>
        <p class="text-muted">Trusted by industry leaders</p>
        <div class="wrapper">
            @foreach ($company as $img)
                <div class="client">
                    <img alt="Client Logo" src="{{ asset('images/logo/' . $img['image']) }}">
                </div>
            @endforeach
        </div>
    </div>
</section>
