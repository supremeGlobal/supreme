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
                                <th class="px-3 center">Submitted On</th>
                                <th class="center">Status</th>
                                <th class="center" width="17%">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($job->requests as $index => $item)
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        <td class="px-3">{!! $item->job->title !!}</td>
                                        <td class="px-3">{!! $item->name !!}</td>
                                        <td class="px-3">{!! $item->email !!}</td>
                                        <td class="px-3 center">{!! $item->mobile !!}</td>
                                        <td class="px-3 center">{!! $item->status !!}</td>

										{{-- <td>
											@if ($request->file)
												<a href="{{ asset('storage/' . $request->file) }}" 
												target="_blank" 
												class="btn btn-outline-info btn-sm">
													<i class="bi bi-eye"></i> View CV
												</a>
											@else
												<span class="text-muted">No CV Uploaded</span>
											@endif
										</td>
										<td>
											<a href="{{ url('cvs.show', $request->id) }}" class="btn btn-primary btn-sm">
												<i class="bi bi-person-lines-fill"></i> Details
											</a>
											<a href="{{ url('cvs.download', $request->id) }}" class="btn btn-success btn-sm">
												<i class="bi bi-download"></i> Download
											</a>
										</td> --}}


                                        <td class="center">
                                            <button type="button" class="btn btn-outline-primary btn-edit"
                                                data-id="{{ $item->id }}" 
												data-company_id="{{ $item->company_id }}"
                                                data-title="{{ $item->title }}"
                                                data-details="{{ $item->details }}" 
												data-bs-toggle="modal"
                                                data-bs-target="#editJob">
                                                <i class="fa-solid fa-pen-to-square me-1"></i> Edit or view
												<i class="fa-solid fa-eye ms-1"></i>
                                            </button>

                                            @include('admin.common.delete.btn')
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
@endsection
