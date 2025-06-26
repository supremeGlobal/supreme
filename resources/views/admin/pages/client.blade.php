@extends('admin.layouts.app')
@section('title', 'Client list')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-success text-center py-1 text-light">Client list</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center">SL</th>
                                <th class="center">Logo</th>
                                <th class="px-3">Name</th>
                                <th class="center">Status</th>
                            </thead>
                            <tbody>
                                @foreach ($client as $item)
                                    @php
                                        $imagePath = $item->image && file_exists(public_path($item->image)) ? $item->image : 'images/default.jpg';
                                    @endphp
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        <td class="center border">
                                            <img src="{{ asset($imagePath) }}" class="rounded-circle border" width="80" height="80" alt="{{ $item->name }}">
                                        </td>
                                        <td class="px-3">{!! $item->name !!}</td>
                                        <td class="center">
                                            <input type="checkbox" class="js-switch status" data-model="clients" data-field="status" data-id="{{ $item->id }}" data-tab="tabName" {{ $item->status == 'active' ? 'checked' : '' }} />
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
