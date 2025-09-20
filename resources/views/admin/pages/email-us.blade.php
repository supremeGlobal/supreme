@extends('admin.layouts.app')
@section('title', 'Email us')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Email us list</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center" width="4%">SL</th>
                                <th class="px-3">Name</th>
                                <th class="px-3">Email</th>
                                <th class="center">Mobile</th>
                                <th class="px-3">Subject</th>
                                <th class="center">Action</th>
                                <th class="px-3 center">Time</th>
                            </thead>
                            <tbody>
                                @foreach ($emailUs->sortByDesc('id') as $item)
                                    <tr id="email_row_{{ $item->id }}" class="{{ $item->status == 'unseen' ? 'table-secondary fw-bold' : '' }}">
                                        <td class="center" width="30">{{ $loop->iteration }}</td>
                                        <td class="px-3" width="10%">{{ $item->name }}</td>
                                        <td class="px-3" width="10%">{{ $item->email }}</td>
                                        <td class="px-3 center" width="15%">{{ $item->mobile }}</td>
                                        <td class="px-3">{{ strip_tags($item->subject) }}</td>
                                        <td width="12%" class="center">
                                            <button type="button" class="btn btn-sm btn-outline-primary btn-view"
                                                data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                data-email="{{ $item->email }}" data-mobile="{{ $item->mobile }}"
                                                data-company_id="{{ $item->company_id }}"
                                                data-subject="{{ $item->subject }}"
                                                data-message="#message_{{ $item->id }}" data-bs-toggle="modal"
                                                data-bs-target="#viewEmail">
                                                <i class="fa-solid fa-eye me-1"></i> View
                                            </button>

                                            <div id="message_{{ $item->id }}" class="d-none">
                                                {!! nl2br(e($item->message)) !!}
                                            </div>

                                            <a href="{{ url('admin/itemDelete', ['EmailUs', $item->id, 'tabName']) }}"
                                                onclick="return confirm('Are you want to delete this?')"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="fa-solid fa-trash me-1"></i> Delete
                                            </a>
                                        </td>
                                        <td class="px-3 center" width="8%">{{ optional($item->created_at)->format('M-d, Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewEmail" tabindex="-1" aria-labelledby="viewEmailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="viewEmailLabel">View Email</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-1">
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <label class="form-label fs-6 fw-bold mb-0">Name</label>
                            <p id="view_name" class="form-control mb-1"></p>
                        </div>
                        <div class="col-md-6 mb-1">
                            <label class="form-label fs-6 fw-bold mb-0">Email</label>
                            <p id="view_email" class="form-control mb-1"></p>
                        </div>
                        <div class="col-md-6 mb-0">
                            <label class="form-label fs-6 fw-bold mb-0">Mobile</label>
                            <p id="view_mobile" class="form-control mb-1"></p>
                        </div>
                        <div class="col-md-6 mb-0">
                            <label class="form-label fs-6 fw-bold mb-0">Subject</label>
                            <p id="view_subject" class="form-control mb-1"></p>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fs-6 fw-bold mb-0">Message</label>
                            <div id="view_details" class="border rounded p-2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-end py-1">
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
                    let id = btn.dataset.id;

                    // Fill modal fields
                    document.getElementById('view_name').textContent = btn.dataset.name;
                    document.getElementById('view_email').textContent = btn.dataset.email;
                    document.getElementById('view_mobile').textContent = btn.dataset.mobile;
                    document.getElementById('view_subject').textContent = btn.dataset.subject;

                    let messageSelector = btn.dataset.message;
                    let messageHtml = document.querySelector(messageSelector).innerHTML;
                    document.getElementById('view_details').innerHTML = messageHtml;

                    fetch(`/admin/email-seen/${id}`, {
						method: "POST",
						headers: {
							"X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
							"Content-Type": "application/json"
						},
						body: JSON.stringify({})
					})
					.then(res => res.json())
					.then(data => {
						if (data.success) {
							let row = document.getElementById('email_row_' + id);
							row.classList.remove('table-secondary', 'fw-bold');
						}
					});
                });
            });
        });
    </script>
@endsection
