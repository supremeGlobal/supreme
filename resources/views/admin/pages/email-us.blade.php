@extends('admin.layouts.app')
@section('title', 'Email us')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Email us list</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center">SL</th>
                                <th class="px-3">Name</th>
                                <th class="px-3">Email</th>
                                <th class="center px-3">Mobile</th>
                                <th class="px-3">Subject</th>
                                <th class="center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($emailUs->sortByDesc('id') as $item)
                                    <tr>
                                        <td class="center" width="2%">{!! $loop->iteration !!}</td>
                                        <td class="px-3" width="10%">{!! $item->name !!}</td>
                                        <td class="px-3" width="10%">{!! $item->email !!}</td>
                                        <td class="px-3 center" width="15%">{!! $item->mobile !!}</td>
                                        <td class="px-3">{{ strip_tags($item->subject) }}</td>                                       
                                        <td width="15%" class="center">
                                            <button type="button" class="btn btn-outline-primary btn-view"
                                                data-id="{{ $item->id }}" data-company_id="{{ $item->company_id }}"
                                                data-name="{{ $item->name }}" data-email="{{ $item->email }}"
                                                data-mobile="{{ $item->mobile }}" data-subject="{{ $item->subject }}"
                                                data-details="{{ htmlspecialchars($item->message) }}" data-bs-toggle="modal"
                                                data-bs-target="#viewEmail">
                                                <i class="fa-solid fa-eye me-1"></i> View
                                            </button>

                                            <a href="{{ url('admin/itemDelete', ['EmailUs', $item->id, 'tabName']) }}"
                                                onclick="return confirm('Are you want to delete this?')"
                                                class="btn btn-outline-danger">
                                                <i class="fa-solid fa-trash me-1"></i> Delete
                                            </a>
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

    {{-- <div class="modal fade" id="viewEmail" tabindex="-1" aria-labelledby="viewEmailLabel" aria-hidden="true">
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
    </div> --}}

    <div class="modal fade" id="viewEmail" tabindex="-1" aria-labelledby="viewEmailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="viewEmailLabel">View Email</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-1">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label fs-6 mb-0">Name</label>
                            <p id="view_name" class="fw-bold"></p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label fs-6 mb-0">Email</label>
                            <p id="view_email" class="fw-bold"></p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label fs-6 mb-0">Mobile</label>
                            <p id="view_mobile" class="fw-bold"></p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label fs-6 mb-0">Subject</label>
                            <p id="view_subject" class="fw-bold"></p>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fs-6 mb-0">Message</label>
                            <div id="view_details" class="border rounded p-2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between py-1">
                    <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.btn-view').forEach(btn => {
                btn.addEventListener('click', () => {
                    let name = btn.dataset.name;
                    let email = btn.dataset.email;
                    let mobile = btn.dataset.mobile;
                    let companyId = btn.dataset.company_id;
                    let subject = btn.dataset.subject;
                    let details = btn.dataset.details;

                    document.getElementById('view_name').textContent = name;
                    document.getElementById('view_email').textContent = email;
                    document.getElementById('view_mobile').textContent = mobile;
                    document.getElementById('view_company').textContent = companyId;
					// replace with company name if needed
                    document.getElementById('view_subject').textContent = subject;
                    document.getElementById('view_details').innerHTML = details;
                });
            });
        });
    </script>
@endsection
