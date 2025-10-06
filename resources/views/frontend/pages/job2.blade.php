@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row g-3">
            <!-- Left Column: Job List -->
            <div class="col-md-4 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-bottom fw-bold text-center py-3">
                        <i class="bi bi-briefcase me-1"></i> Available Jobs
                    </div>
                    <div class="list-group list-group-flush" id="jobList" style="max-height: 75vh; overflow-y: auto;">
                        @foreach ($jobs as $job)
                            <button class="list-group-item list-group-item-action job-item text-start"
                                data-id="{{ $job->id }}">
                                <h6 class="mb-1 fw-semibold">{{ $job->title }}</h6>
                                <small class="text-muted">{{ $job->company->name ?? 'No Company' }}</small>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Right Column: Job Details -->
            <div class="col-md-8 col-lg-9">
                <div class="card border-0 border-primary shadow-sm h-100">
                    <div class="card-body" id="jobDetails" tyle="min-height: 75vh; display: flex; align-items: center; justify-content: center;">
                        <div class="text-center text-muted">
                            <i class="bi bi-search display-5 d-block mb-3"></i>
                            <p>Select a job to view details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Apply Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="applyForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_id" id="job_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Apply for Job</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control" required>
                        </div>
						<div class="mb-3">
                            <label>Expected salary</label>
                            <input type="text" name="mobile" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Upload CV</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('js')
    <script>
        document.querySelectorAll('.job-item').forEach(btn => {
            btn.addEventListener('click', function() {
                const jobId = this.dataset.id;

                // highlight selected
                document.querySelectorAll('.job-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                // load job details
                fetch(`/jobs/${jobId}`)
                    .then(res => res.json())
                    .then(job => {
                        document.querySelector('#jobDetails').innerHTML = `
                    <h4 class="fw-bold mb-2">${job.title}</h4>
                    <p class="text-muted mb-2">${job.company?.name ?? ''}</p>
                    <div class="mb-4">${job.details}</div>
                    <div class="text-end">
                        <button class="btn btn-primary" onclick="openApplyModal(${job.id})">
                            <i class="bi bi-send me-1"></i> Apply Now
                        </button>
                    </div>
                `;
                    });
            });
        });

        function openApplyModal(jobId) {
            document.querySelector('#job_id').value = jobId;
            const modal = new bootstrap.Modal(document.getElementById('applyModal'));
            modal.show();
        }

        document.querySelector('#applyForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch('{{ route('jobs.apply') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        bootstrap.Modal.getInstance(document.getElementById('applyModal')).hide();
                        this.reset();
                    }
                })
                .catch(() => alert('Something went wrong!'));
        });
    </script>
@endsection