@extends('admin.layouts.app')
@section('title', 'Company\'s news')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addNews">
                            <i class="fas fa-plus"></i>
                            Add News
                        </button>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">Company's news</h4>
                    <div class="card-body px-1 py-0">
						<table class="table table-bordered align-middle">
                            <thead>
                                <th class="center">SL</th>
                                <th class="px-3">Company page</th>
                                <th class="px-3">Subject</th>
                                <th class="px-3">Details</th>
                                <th class="center">Status</th>
                            </thead>
                            <tbody>
                                @foreach ($news->sortBy('company_id') as $item)
                                    <tr>
                                        <td class="center" width="2%">{!! $loop->iteration !!}</td>                                        
                                        <td class="px-3" width="10%">{!! $item->company->name !!}</td>
                                        <td class="px-3" width="15%">{!! $item->subject !!}</td>
                                        <td class="px-3">{{ strip_tags($item->details) }}</td>
                                        <td class="center">
                                            <input type="checkbox" class="js-switch status" data-model="news"
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

    <div class="modal fade" id="addNews" tabindex="-1" aria-labelledby="addNewsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addNewsLabel">Company's News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/add-news') }}" method="POST">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
							<div class="col-md-12 mb-2">
								<label for="company" class="form-label fs-5 mb-0">Company name</label>
								<select class="form-select" id="company" name="company_id" required>
									<option value="" selected disabled>Select one page</option>
									@foreach ($company as $item)
										<option value="{{$item->id}}">{{$item->name}}</option>
									@endforeach
								</select>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="title" class="form-label fs-5 mb-0">Subject</label>
                                <input type="text" name="subject" id="title" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <label for="summernote" class="form-label fs-5 mb-0">Description</label>
                                <textarea id="summernote" name="details" placeholder="Write your text here..."></textarea>
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
