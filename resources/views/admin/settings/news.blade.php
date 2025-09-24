@extends('admin.layouts.app')
@section('title', 'Company\'s news')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addNews">
                            <i class="fas fa-plus"></i>
                            Add News
                        </button>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Company's news</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center" width="3%">SL</th>
                                <th class="px-3">Company page</th>
                                <th class="px-3">Subject</th>
                                <th class="px-3">Details</th>
                                <th class="center">Status</th>
                                <th class="center" width="12%">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($news->sortBy('company_id') as $item)
                                    <tr>
                                        <td class="center">{!! $loop->iteration !!}</td>
                                        <td class="px-3">{!! $item->company->name !!}</td>
                                        <td class="px-3">{!! $item->subject !!}</td>
                                        <td class="px-3">{{ strip_tags($item->details) }}</td>

										@include('admin.common.status')

										<td class="center">
                                            <button type="button" class="btn btn-outline-primary btn-edit"
                                                data-id="{{ $item->id }}" data-company_id="{{ $item->company_id }}"
                                                data-subject="{{ $item->subject }}"
                                                data-details="{{ htmlspecialchars($item->details) }}" data-bs-toggle="modal"
                                                data-bs-target="#editNews">
												<i class="fa-solid fa-pen-to-square me-1"></i> Edit
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

    <div class="modal fade" id="addNews" tabindex="-1" aria-labelledby="addNewsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addNewsLabel">Company's News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/add-news') }}" method="POST">
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
                                <label for="title" class="form-label fs-5 mb-0">Subject</label>
                                <input type="text" name="subject" id="title" class="form-control"
                                    placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <label for="summernote" class="form-label fs-5 mb-0">Description</label>
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
                                    @foreach ($company as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
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
