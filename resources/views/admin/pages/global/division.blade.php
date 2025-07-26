@extends('admin.layouts.app')
@section('title', 'Our division')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
					<div class="card-header p-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addInfo">
                            <i class="fas fa-plus"></i>
                            Add division
                        </button>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Division list</h4>
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
                                @foreach ($info as $item)
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        <td class="center border">
                                            <img src="{{ asset("images/".$item->image) }}" class="border" width="150" height="120" alt="{{ $item->title }}">
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
@endsection

@section('js')
@endsection
