@extends('admin.layouts.app')
@section('title', 'Company\'s information')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-success text-center py-1 text-light">Company information</h4>
                    <div class="ms-1 mt-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addInfo">
                            <i class="fas fa-plus pe-2"></i>
                            Add Information
                        </button>
                    </div>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center">SL</th>
                                <th class="center">Logo</th>
                                <th class="px-3">Name</th>
                                <th class="center">Status</th>
                            </thead>
                            <tbody>
                                @foreach ($company as $item)
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        <td class="center border">
                                            <img src="{{ asset($item->image) }}" class="rounded-circle border"
                                                width="80" height="80" alt="{{ $item->name }}">
                                        </td>
                                        <td class="px-3">{!! $item->name !!}</td>
                                        <td class="center">
                                            <input type="checkbox" class="js-switch status" data-model="companies"
                                                data-field="status" data-id="{{ $item->id }}" data-tab="tabName"
                                                {{ $item->status == 'active' ? 'checked' : '' }} />
                                        </td>
                                        {{-- <td width="auto">
											<div class="btn-group">
												<a href="{{ url('patient-report', [$item->id]) }}"
													class="btn btn-sm btn-info py-1">View</a>
											</div>
										</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Company's new information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="title" class="form-label">Info title</label>
                                <input type="text" name="name" id="title" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-12">
                                <label for="title" class="form-label">Description</label>
                                <textarea id="summernote" placeholder="Write your text here..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                        Add now
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
