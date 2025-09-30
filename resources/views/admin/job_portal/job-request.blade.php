@extends('admin.layouts.app')
@section('title', 'Job list')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Job request</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center" width="3%">SL</th>
                                <th class="px-3">Job title</th>
                                <th class="px-3">Name</th>
                                <th class="px-3">Email</th>
                                <th class="px-3 center">Mobile</th>
                                <th class="center">Status</th>
                                <th class="center" width="17%">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($jobRequest->sortBy('company_id') as $item)
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        <td class="px-3">{!! $item->job->title !!}</td>
                                        <td class="px-3">{!! $item->name !!}</td>
                                        <td class="px-3">{!! $item->email !!}</td>
                                        <td class="px-3 center">{!! $item->mobile !!}</td>
                                        <td class="px-3 center">{!! $item->status !!}</td>


                                        <td class="center">
                                            <button type="button" class="btn btn-outline-primary btn-edit"
                                                data-id="{{ $item->id }}" 
												data-company_id="{{ $item->company_id }}"
                                                data-title="{{ $item->title }}"
                                                data-details="{{ $item->details }}" 
												data-bs-toggle="modal"
                                                data-bs-target="#editJob">
                                                <i class="fa-solid fa-pen-to-square me-1"></i> Edit or view
												<i class="fa-solid fa-eye ms-1"></i>
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
@endsection

@section('js')
@endsection
