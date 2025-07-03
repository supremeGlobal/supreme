@extends('admin.layouts.app')
@section('title', 'Client list')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
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
                                @foreach ($client as $item)
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        @php
                                            $imagePath = public_path($item->image);
                                            $imageExists = $item->image && file_exists($imagePath);
                                        @endphp

                                        <td class="center border" width="80">
                                            @if ($imageExists)
                                                <img src="{{ asset($item->image) }}" class="rounded-circle border" width="80" height="80" alt="{{ $item->name }}">
                                            @endif
                                        </td>

                                        <td class="px-3">{!! $item->name !!}</td>
                                        <td class="center">
                                            <input type="checkbox" class="js-switch status" data-model="clients"
                                                data-field="status" data-id="{{ $item->id }}" data-tab="tabName"
                                                {{ $item->status == 'active' ? 'checked' : '' }} />
                                        </td>
                                        <td width="auto" class="text-center">
                                            <a href="{{ url('', [$item->id]) }}" class="btn btn-info py-1 px-3">View</a>
                                            <a href="{{ url('', [$item->id]) }}" class="btn btn-danger py-1 px-3">Delete</a>
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
