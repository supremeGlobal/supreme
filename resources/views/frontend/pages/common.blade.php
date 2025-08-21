<!-- Right Slide Modal -->
{{-- <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header py-2">
				<h4 class="modal-title" id="exampleModalLabel">Login</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="mb-2">
						<label for="email" class="form-label">{{ __('Email Address') }}</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
							name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="mb-3">
						<label for="password" class="form-label">{{ __('Password') }}</label>
						<input id="password" type="password"
							class="form-control @error('password') is-invalid @enderror" name="password" required
							autocomplete="current-password">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember"
								{{ old('remember') ? 'checked' : '' }}>
							<label class="form-check-label" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>
					</div>

					<div class="my-1 d-grid col-md-12">
						<button type="submit" class="btn btn-primary">
							{{ __('Login') }}
						</button>
						@if (Route::has('password.request'))
							<a class="btn btn-link d-none" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between d-none">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success">
					<i class="fas fa-envelope pe-2"></i>
					Send email
				</button>
			</div>
		</div>
	</div>
</div> --}}

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header py-1">
                <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                <form method="POST" action="{{ route('login') }}" class="my-1">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label mb-0">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <label for="password" class="form-label mb-0">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 d-none">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="mt-2 d-grid col-md-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link d-none" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="emailUs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h1 class="modal-title fs-4" id="exampleModalLabel">Get in touch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body py-1">
                <small class="fw-bold">
                    We will respond to your message as soon as possible
                    {{-- We will reply to your message as soon as possible. --}}
                </small>
                <form action="{{ url('send-email') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 m-0 p-2">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-6 m-0 p-2">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-6 m-0 p-2">
                            <input type="text" name="mobile" class="form-control"
                                placeholder="Mobile number">
                        </div>
                        <div class="col-md-6 m-0 p-2">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-md-12 m-0 p-2">
                            <textarea name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between py-1 px-0">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-envelope pe-2"></i>
                            Send email
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="map" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-slide-right">
        <div class="modal-content h-100">

            <!-- Close Button (Top Right) -->
            <div class="modal-header border-0 justify-content-end">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    Back <i class="fas fa-arrow-right ms-1"></i>
                </button>
            </div>

            <!-- Fullscreen Map -->
            <div class="modal-body p-0 h-100">
                <iframe src="{{ $companyInfo['head_office_location_map'] ?? '' }}" width="100%" height="100%"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
