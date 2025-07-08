@extends('admin.layouts.app')
@section('title', 'About us')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">About us</h4>
                    <div class="card-body px-1 py-0">
                        <form action="{{ url('admin/supreme-global/about/update') }}" method="POST">
                            @csrf
                            <div class="modal-body py-1">
                                <div class="row">
                                    <div class="col-md-12">
										<input type="hidden" name="id" value="{{ $info->id }}">
                                        <textarea id="summernote" name="details" placeholder="Write your text here...">{{$info->details}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center py-1">
                                <button type="submit" class="btn btn-primary px-4">Update about us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
