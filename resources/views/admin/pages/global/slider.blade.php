@extends('admin.layouts.app')
@section('title', $company . '\'s slider')

@section('content')
    <div class="container-fluid mt-2">
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
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">
                        {{ Str::title(str_replace('-', ' ', $company)) }}'s Slider
                    </h4>
                    <div class="card-body p-2">
                        <div class="row">
                            @foreach ($slider->sortBy('company_id') as $item)
                                <div class="col-6 col-md-4 col-lg-3 my-1">
                                    <div class="border rounded shadow-sm h-100 d-flex flex-column overflow-hidden">
                                        <div class="bg-white d-flex align-items-center justify-content-center" style="height: 200px;">
                                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="img-fluid" style="object-fit: contain;">
                                        </div>

                                        <div class="p-1 border-top bg-light d-flex flex-column gap-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn btn-sm text-dark border border-primary rounded-1 py-1 px-3 w-10">
                                                    <strong>{{ $loop->iteration }}</strong>
                                                </div>

                                                <div class="form-group mb-0 d-flex align-items-center justify-content-between border border-primary rounded-1 py-1 px-3 w-50 mx-1" style="gap: 10px; min-width: 120px;">
                                                    <label class="small">Status</label>
													
                                        			@include('admin.common.status')
                                                </div>

                                                <a href="{{ url('admin/itemDelete', [class_basename($item), $item->id]) }}"
                                                    onclick="return confirm('Are you want to delete this?')"
                                                    class="btn btn-sm btn-outline-danger w-50">
                                                    <i class="fa-solid fa-trash me-1"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
                <form action="{{ route('slider.store', $company) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="image" class="form-label fs-5 mb-0">Add image</label>
                                <input type="hidden" name="companyId" value="{{ $companyId }}">
                                <input type="file" name="image" id="image" class="form-control"
                                    placeholder="Subject" required>
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
