<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Career</title>
    @include('admin.layouts.head')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

        {{-- Header --}}
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="fa-solid fa-bars"></i>
							<span class="d-md-none ms-1">Jobs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Sidebar --}}
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="light" style="--lte-sidebar-width: 350px;">
            <div class="sidebar-brand">
				<a href="{{ url('/') }}" class="brand-link">
					<span class="brand-text fw-light">Supreme Global Career</span>
				</a>
            </div>

            <div class="sidebar-wrapper">
                <nav class="mt-3">
                    <ul class="nav sidebar-menu flex-column">
                        @foreach ($jobs as $item)
                            <li class="nav-item">
                                <a href="{{ route('jobs.show', $item->id) }}"
                                    class="nav-link {{ isset($job) && $job->id == $item->id ? 'active' : '' }}">
                                    <i
                                        class="nav-icon fa-regular {{ isset($job) && $job->id == $item->id ? 'fa-circle-check text-success' : 'fa-circle text-secondary' }}"></i>
                                    <p>
                                        {{ $item->title }}
                                        <small
                                            class="d-block text-muted">{{ $item->company->name ?? 'No Company' }}</small>
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </aside>

        {{-- Main Content --}}
        <main class="app-main">
            <div class="app-content p-2">
                @if ($job)
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="fw-bold">{{ $job->title }}</h4>
                            <p class="text-muted mb-2">{{ $job->company->name ?? 'N/A' }}</p>
							<hr>
                            <p>{!! $job->details ?? 'No description available.' !!}</p>

							<div class="text-center">
								<button class="btn btn-primary mt-3 col-12 col-md-4" data-bs-toggle="modal" data-bs-target="#applyModal">
									Apply Now
								</button>
							</div>
                        </div>
                    </div>
                @else
                    <div class="text-center mt-5 text-muted">
                        <i class="fa-solid fa-briefcase fa-2x mb-3"></i>
                        <h5>Click a job from the left sidebar to see details</h5>
                    </div>
                @endif
            </div>
        </main>

        {{-- Apply Modal --}}
        <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('jobs.apply') }}" enctype="multipart/form-data" class="modal-content">
                    @csrf
                    <input type="hidden" name="job_id" value="{{ $job->id ?? '' }}">
                    <div class="modal-header">
                        <h5 class="modal-title">Apply for {{ $job->title ?? '' }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body py-1">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email (optional)</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Expected Salary</label>
                            <input type="text" name="salary" class="form-control" required>
                        </div>
                        <div lass="mb-3">
                            <label class="form-label">Upload CV (PDF/DOC)[2 MB max]</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.layouts.footer')
    @include('admin.layouts.alertMessage')
</body>

</html>
