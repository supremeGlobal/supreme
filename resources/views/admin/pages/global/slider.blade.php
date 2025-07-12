@extends('admin.layouts.app')
@section('title', $company. '\'s slider')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-1">
                        <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                            data-bs-target="#addImage">
                            <i class="fas fa-plus"></i>
                            Add image
                        </button>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">{{ ucwords(str_replace('-', ' ', $company)) }}'s Slider</h4>
                    <div class="card-body px-1 py-0">
						<table class="table table-bordered align-middle">
                            <thead>
                                <th class="center">SL</th>
                                <th class="px-3">Image</th>
                                <th class="center">Status</th>
                            </thead>
                            <tbody>
                                @foreach ($slider->sortBy('company_id') as $item)
                                    <tr>
                                        <td class="center" width="2%">{!! $loop->iteration !!}</td>
										<td class="center border">
                                            <img src="{{ asset($item->image) }}" class="border"
                                                width="120" height="120" alt="{{ $item->name }}">
                                        </td>
                                        <td class="center">
                                            <input type="checkbox" class="js-switch status" data-model="sliders"
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

    <div class="modal fade" id="addImage" tabindex="-1" aria-labelledby="addImageLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addImageLabel">Slider image</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/' .$company. '/slider/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="image" class="form-label fs-5 mb-0">Add image</label>
								<input type="hidden" name="company" value="{{ $company }}">
								<input type="hidden" name="companyId" value="{{ $companyId }}">
                                <input type="file" name="image" id="image" class="form-control" placeholder="Subject" required>
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
