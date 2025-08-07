@extends('admin.layouts.app')
@section('title', 'Client list')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addClient">
                            <i class="fas fa-plus"></i>
                            Add client
                        </button>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Client list</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center">SL</th>
                                <th class="center">Logo</th>
                                <th class="px-3">Name</th>
                                <th class="center">Status</th>
                                <th class="center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($clients as $item)
                                    <tr>
                                        <td width="5%" class="center">{!! $loop->iteration !!}</td>
                                        @php
                                            $imagePath = public_path($item->image);
                                            $imageExists = $item->image && file_exists($imagePath);
                                        @endphp

                                        <td width="10%" class="center border">
                                            @if ($imageExists)
                                                <img src="{{ asset($item->image) }}" class="rounded-circle border" width="80" height="80" alt="{{ $item->name }}">
                                            @endif
                                        </td>

                                        <td class="px-3">{!! $item->name !!}</td>
                                        <td width="8%" class="center">
                                            <input type="checkbox" class="js-switch status" data-model="Client" data-id="{{ $item->id }}" data-tab="tabName" {{ $item->status == 'active' ? 'checked' : '' }} />
                                        </td>
                                        <td width="8%" class="text-center">
                                            <a href="{{ url('admin/itemDelete', ['Client', $item->id, 'tabName']) }}" onclick="return confirm('Are you want to delete this?')"
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

    <div class="modal fade" id="addClient" tabindex="-1" aria-labelledby="addClientLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addClientLabel">Create client</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/add-client') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="client" class="form-label fs-5 mb-0">Client name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="image" class="form-label fs-5 mb-0">Client image</label>
                                <input type="file" name="image" id="image" class="form-control">
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
@endsection

@section('js')
@endsection
