{{-- <section id="contact">
    <div class="container-fluid px-3">
        <h2 class="fw-bold text-center">Contact {{ $companyName ?? '' }}</h2>
        <p class="text-muted text-center">Contact our customer care</p>
        <div class="row justify-content-between">
            <div class="col-md-4">
                <div class="rounded-3 p-3 border text-bg-light">
                    <h5 class="pb-2">
                        <i class="fas fa-map-marker-alt fs-5 pe-2"></i>
                        Address
                    </h5>
                    <p>
						 {{ $companyInfo['head_office_location'] }}
                    </p>
                </div>

                <div class="rounded-3 p-3 border text-bg-light p-3 my-2">
                    <h5 class="pb-2">
                        <i class="fas fa-phone-alt fs-5 pe-2"></i>
                        Help desk
                    </h5>
                    <p>
                        <strong>Phone: </strong> {{ $companyInfo['contact_number'] ?? '' }}
                        <br>
                        <strong class="pt-4">Whatsapp: </strong> {{ $companyInfo['contact_number'] ?? '' }}
                    </p>
                </div>

                <div class="rounded-3 p-3 border text-bg-light p-3">
                    <h5 class="pb-2">
                        <i class="fas fa-envelope fs-5 pe-2"></i>
                        Email
                    </h5>
					<a href="mailto:{{ $companyInfo['info_email'] }}" class="text-dark text-decoration-none">
						{{ $companyInfo['info_email'] }}
					</a>
                </div>
            </div>
            <div class="col-md-8 py-1">
                <iframe src="https://www.google.com/maps?q=23.779395286290402,90.42576674365971&z=14&output=embed"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section> --}}

<section id="contact">
    <div class="container-fluid px-3">
        <h2 class="fw-bold text-center">Contact {{ $companyName ?? '' }}</h2>
        <p class="text-muted text-center">Contact our customer care</p>
        <div class="row justify-content-between">
            <div class="col-md-4">
                <div class="rounded-3 p-3 border text-bg-light">
                    <h5 class="pb-2">
                        <i class="fas fa-map-marker-alt fs-5 pe-2"></i>
                        Address
                    </h5>
                    <p>
						{{ $office_location ?? $companyInfo['head_office_location'] }}
                    </p>
                </div>

                <div class="rounded-3 p-3 border text-bg-light p-3 my-2">
                    <h5 class="pb-2">
                        <i class="fas fa-phone-alt fs-5 pe-2"></i>
                        Help desk
                    </h5>
                    <p>
                        <strong>Phone: </strong> {{ $office_help_desk ?? $companyInfo['contact_number'] }}
                        <br>
                        <strong class="pt-4">Whatsapp: </strong> {{ $office_help_desk ??  $companyInfo['contact_number'] }}
                    </p>
                </div>

                <div class="rounded-3 p-3 border text-bg-light p-3">
                    <h5 class="pb-2">
                        <i class="fas fa-envelope fs-5 pe-2"></i>
                        Email
                    </h5>
					<a href="mailto:{{ $companyInfo['info_email'] }}" class="text-dark text-decoration-none">
						{{ $companyInfo['info_email'] }}
					</a>
                </div>
            </div>
            
            @php
                $mapValue = $office_location_map ?? $companyInfo['head_office_location_map'];
                
                if (!Str::startsWith($mapValue, 'http')) {
                    $mapValue = 'https://www.google.com/maps?q=' . urlencode($mapValue) . '&output=embed';
                }
            @endphp
            
            <div class="col-md-8 py-1">
                <iframe src="{{ $mapValue }}"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

