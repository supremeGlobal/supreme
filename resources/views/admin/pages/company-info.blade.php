@extends('admin.layouts.app')
@section('title', 'Company\'s information')

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
                            Add Information
                        </button>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Company information</h4>
                    <div class="card-body px-1 py-0">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <th class="center">SL</th>
                                <th class="px-3">Company page</th>
                                <th class="px-3">Key</th>
                                <th class="px-3">Value</th>
                                <th class="center">Status</th>
                            </thead>
                            <tbody>
                                @foreach ($companyInfo->sortBy('company_id') as $item)
                                    <tr>
                                        <td class="center" width="30">{!! $loop->iteration !!}</td>
                                        <td class="px-3">{!! $item->company->name !!}</td>
                                        <td class="px-3">{!! $item->key !!}</td>
                                        <td class="px-3">{!! $item->value !!}</td>
                                        <td class="center">
                                            <input type="checkbox" class="js-switch status" data-model="company_infos"
                                                data-field="status" data-id="{{ $item->id }}" data-tab="tabName"
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

    <div class="modal fade" id="addInfo" tabindex="-1" aria-labelledby="addInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addInfoLabel">Company's New Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/add-info') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
							<div class="col-md-12 mb-3">
								<label for="company" class="form-label fs-5">Company name</label>
								<select class="form-select" id="company" name="company_id">
									<option selected>Select one page</option>
									@foreach ($company as $item)
										<option value="{{$item->id}}">{{$item->name}}</option>
									@endforeach
								</select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="title" class="form-label fs-5">Info title</label>
                                <input type="text" name="key" id="title" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-12">
                                <label for="summernote" class="form-label fs-5">Description</label>
                                <textarea id="summernote" name="value" placeholder="Write your text here..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add now</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
