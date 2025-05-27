@extends('admin.layouts.app')
@section('title', 'Slider')

@section('content')
    {{-- @include('includes.alertMessage') --}}
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <h6 class="card-header bg-success text-center py-1 mx-1">Slider list</h6>
                        <div class="card-body p-1">
                            <table class="table table-bordered">
                                <thead class="bg-info">
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Info</th>
                                    <th>Image</th>
                                    <th>Order By</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $item)
										<tr>
											<td width="30">{{$loop->iteration}}</td>
											<td>{!! $item->title !!}</td>
											<td>{!! $item->info !!}</td>
											<td>{!! $item->status !!}</td>
											<td>{!! $item->order_by !!}</td>
											<td width="auto">
												<div class="btn-group">
													<a href="{{ url('patient-report', [$item->id]) }}"
														class="btn btn-sm btn-info py-1">View</a>
												</div>
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
    </div>
@endsection

@section('js')
@endsection
