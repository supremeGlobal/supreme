@extends('admin.layouts.app')
@section('title', 'Job list')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addJob">
                            <i class="fas fa-plus"></i>
                            Add new job
                        </button>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Job list</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center" width="3%">SL</th>
                                <th class="px-3">Company name</th>
                                <th class="px-3">Job title</th>
                                <th class="center">Status</th>
                                <th class="center" width="17%">Manage Job</th>
                            </thead>
                            <tbody>
                                @foreach ($jobs->sortByDesc('id') as $item)
                                    <tr>
                                        <td class="center" width="30">{!! $item->id !!}</td>
                                        <td class="px-3">{!! $item->company->name !!}</td>
                                        <td class="px-3">{!! $item->title !!}</td>

                                        @include('admin.common.status')

                                        <td class="center">
                                            <button type="button" class="btn btn-outline-primary btn-edit"
                                                data-id="{{ $item->id }}" 
												data-company_id="{{ $item->company_id }}"
                                                data-title="{{ $item->title }}"
                                                data-details="{{ $item->details }}" 
												data-bs-toggle="modal"
                                                data-bs-target="#editJob">
												<i class="fa-solid fa-eye me-1"></i>
												View / Edit
                                            </button>

											@if ($item->requests->count())
												<a class="btn btn-outline-success" href="{{ route('cvs.index', $item->id) }}">
													<i class="fa-solid fa-eye me-1"></i>
													All CVs [{{ $item->requests->count() }}]
												</a>
											@else
												@include('admin.common.delete.btn')
											@endif
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

    <div class="modal fade" id="addJob" tabindex="-1" aria-labelledby="addJobLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addJobLabel">Create job</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('job.store') }}" method="POST">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="company" class="form-label fs-5 mb-0">Company name</label>
                                <select class="form-select" id="company" name="company_id" required>
                                    <option value="" selected disabled>Select one page</option>
                                    @foreach ($company as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="title" class="form-label fs-5 mb-0">Job title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Ex: Civil engineering" required>
                            </div>
                            <div class="col-md-12">
                                <label for="summernote" class="form-label fs-5 mb-0">Job details</label>
                                <textarea id="summernote" name="details" placeholder="Write your text here..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between py-1">
                        <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success px-4">Add now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<div class="modal fade" id="editJob" tabindex="-1" aria-labelledby="editInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="editInfoLabel">Edit job</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editInfoForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="edit_company" class="form-label fs-5 mb-0">Company name</label>
                                <select class="form-select" id="edit_company" name="company_id" required>
                                    <option value="" disabled>Select one page</option>
                                    @foreach ($company as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="edit_title" class="form-label fs-5 mb-0">Job title</label>
                                <input type="text" name="title" id="edit_title" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="edit_summernote" class="form-label fs-5 mb-0">Job details</label>
                                <textarea id="edit_summernote" name="details"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between py-1">
                        <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success px-4">Update now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.btn-edit').forEach(btn => {
                btn.addEventListener('click', () => {
                    let id = btn.dataset.id;
                    let companyId = btn.dataset.company_id;
                    let title = btn.dataset.title;
                    let details = btn.dataset.details;

                    document.getElementById('edit_company').value = companyId;
                    document.getElementById('edit_title').value = title;
                    $('#edit_summernote').summernote('code', details);

                    // Set form action dynamically
                    document.getElementById('editInfoForm').action = `/admin/update-job/${id}`;
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
