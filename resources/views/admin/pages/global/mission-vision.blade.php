@extends('admin.layouts.app')
@section('title', 'Our division')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
					<div class="card-header p-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addMission">
                            <i class="fas fa-plus"></i>
                            Add mission & vision
                        </button>
                    </div>

                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">
						{{ ucwords(str_replace('-', ' ', $company)) }}'s mission & vision
					</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="px-1">SL</th>
                                <th class="px-2">Image</th>
                                <th class="px-2">Title</th>
                                <th class="px-2">Details</th>
                                <th class="px-1">Status</th>
                            </thead>
                            <tbody>
                                @foreach ($missionVision as $item)
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        <td class="center border">
                                            <img src="{{ asset($item->image) }}" class="border" width="150" height="120" alt="{{ $item->title }}">
                                        </td>
                                        <td>{!! $item->title !!}</td>
                                        <td>{!! $item->details !!}</td>
                                        <td class="center">
                                            <input type="checkbox" class="js-switch status" data-model="Company"
                                                data-id="{{ $item->id }}" data-tab="tabName"
                                                {{ $item->status == 'active' ? 'checked' : '' }} />
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

	 <div class="modal fade" id="addMission" tabindex="-1" aria-labelledby="addMissionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addMissionLabel">Create mission or vision</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
				<form action="{{ url('admin/' .$company. '/mission/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
							<input type="hidden" name="companyId" value="{{$companyId}}">
                            <div class="col-md-12 mb-2">
                                <label for="company" class="form-label fs-5 mb-0">
									Company name
									<strong>[{{ ucwords(str_replace('-', ' ', $company)) }}]</strong>
								</label>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="title" class="form-label fs-5 mb-0">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Our mission" required>
                            </div>
							<div class="col-md-12 mb-2">
                                <label for="image" class="form-label fs-5 mb-0">Add image</label>
                                <input type="file" name="image" id="image" class="form-control" placeholder="Add image" required>
                            </div>
                            <div class="col-md-12">
                                <label for="summernote" class="form-label fs-5 mb-0">Details</label>
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

    <div class="modal fade" id="editNews" tabindex="-1" aria-labelledby="editNewsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="editNewsLabel">Edit Company News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editNewsForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="edit_company" class="form-label fs-5 mb-0">Company name</label>
                                <select class="form-select" id="edit_company" name="company_id" required>
                                    <option value="" disabled>Select one page</option>
                                    {{-- @foreach ($company as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="edit_subject" class="form-label fs-5 mb-0">Subject</label>
                                <input type="text" name="subject" id="edit_subject" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="edit_summernote" class="form-label fs-5 mb-0">Description</label>
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
                    let subject = btn.dataset.subject;
                    let details = btn.dataset.details;

                    document.getElementById('edit_company').value = companyId;
                    document.getElementById('edit_subject').value = subject;
                    $('#edit_summernote').summernote('code', details);

                    // Set form action dynamically
                    document.getElementById('editNewsForm').action = `/admin/update-news/${id}`;
                });
            });
        });
    </script>
@endsection
