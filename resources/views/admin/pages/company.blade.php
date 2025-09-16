@extends('admin.layouts.app')
@section('title', 'Company list')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Company list</h4>
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
										
										@include('admin.common.status')                                     
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
