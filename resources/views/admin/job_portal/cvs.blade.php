@extends('admin.layouts.app')
@section('title', 'All CVs for ' . $job->title)

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <a href="{{ route('job.index') }}" class="btn btn-warning border border-dark">
                        <i class="fa-regular fa-hand-point-left pe-2"></i>
                        Back to Jobs
                    </a>
                </div>

                <div class="card">
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">
                        All CVs for [{{ $job->title }}]
                    </h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center" width="3%">SL</th>
                                <th class="px-3">Name</th>
                                <th class="px-3">Email</th>
                                <th class="px-3 center">Mobile</th>
                                <th class="center">Status</th>
                                <th class="center">File type</th>
                                <th class="center">Action</th>
                                <th class="px-3 center">Submit date</th>
                            </thead>
                            <tbody>
                                @foreach ($job->requests as $index => $item)
                                    <tr>
                                        <td class="center">{!! $loop->iteration !!}</td>
                                        <td class="px-3">{!! $item->name !!}</td>
                                        <td class="px-3">{!! $item->email !!}</td>
                                        <td class="px-3 center">{!! $item->mobile !!}</td>
                                        {{-- <td class="px-3 center">{!! $item->status !!}</td> --}}

										<td class="text-center align-middle">
											<div class="d-inline-block">
												<select class="form-select w-auto py-1 cv-status-dropdown" 
														data-id="{{ $item->id }}">
													@foreach(['pending', 'reviewed', 'accepted', 'rejected'] as $status)
														<option value="{{ $status }}" 
															{{ $item->status === $status ? 'selected' : '' }}>
															{{ ucfirst($status) }}
														</option>
													@endforeach
												</select>
											</div>
										</td>

										<td class="center">
											{{ pathinfo($item->file, PATHINFO_EXTENSION) }}
										</td>

                                        <td class="center">
											@if (pathinfo($item->file, PATHINFO_EXTENSION) === 'pdf')
												<a href="{{ asset($item->file) }}" target="_blank" class="btn btn-primary btn-sm">
													<i class="fa-solid fa-eye pe-2"></i>
													View CV
												</a>
											@endif
											<a href="{{ asset($item->file) }}" download class="btn btn-success btn-sm">
												<i class="fa-solid fa-download pe-2"></i>
												Download
											</a>
                                        </td>
                                        <td class="center" width="12%">
											{{ optional($item->created_at)->format('M-d, Y') }}
											(<strong>{{ optional($item->created_at)->format('h:i A') }}</strong>)
										</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.cv-status-dropdown').change(function() {
            var cvId = $(this).data('id');
            var status = $(this).val();

            $.ajax({
                url: '{{ route("cvs.updateStatus") }}', // create this route
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: cvId,
                    status: status
                },
				success: function(data) {
					Swal.fire({
						icon: 'success',
						title: 'Success',
						text: data.message,
						timer: 1500,
						showConfirmButton: false
					});
				},
				error: function(xhr) {
					let message = xhr.responseJSON?.message || 'Something went wrong';
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: message,
						confirmButtonText: 'OK'
					});
				}


            });
        });
    });
	
	$(document).ready(function() {
		$('.table').DataTable({
			order: [
				[0, 'desc']
			],
			destroy: true
		});
	});
</script>
@endsection