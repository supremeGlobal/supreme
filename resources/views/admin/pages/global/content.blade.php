@extends('admin.layouts.app')
@section('title', 'Our division')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border border-danger">
                    <div class="card-header p-1">
                        <ul class="nav nav-pills float-start">
                            <li class="nav-item">
                                <a class="nav-link active btn-sm" data-bs-toggle="pill" href="#allContent">All content</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link btn-sm" data-bs-toggle="pill" href="#allContentCategory">All content category</a>
                            </li>
                        </ul>

                        <ul class="nav nav-pills float-end">
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal" data-bs-target="#addContent">
                                    <i class="fas fa-plus"></i> Add content
                                </button>
                            </li>
                            <li class="nav-item ms-2">
                                <button type="button" class="btn btn-success rounded-1" data-bs-toggle="modal" data-bs-target="#addCategory">
                                    <i class="fas fa-plus"></i> Add content's category
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body px-1 py-0">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="allContent">
                                <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">
                                    {{ ucwords(str_replace('-', ' ', $company)) }}'s content
                                </h4>
                                {{-- <table class="table table-bordered align-middle">
                                    <thead>
                                        <th class="px-1 center">SL</th>
                                        <th class="px-2 center">Image</th>
                                        <th class="px-2">Title</th>
                                        <th class="px-2">Details</th>
                                        <th class="px-1 center">Status</th>
                                        <th class="px-1 center">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($missionVision as $item)
                                            <tr>
                                                <td class="center" width="30">{{ $loop->iteration }}</td>
                                                <td class="center border">
                                                    <img src="{{ asset($item->image) }}" class="border" width="150"
                                                        height="120" alt="{{ $item->title }}">
                                                </td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->details }}</td>
                                                <td class="center">
                                                    <input type="checkbox" class="js-switch status"
                                                        data-model="MissionVision" data-id="{{ $item->id }}"
                                                        data-tab="tabName"
                                                        {{ $item->status == 'active' ? 'checked' : '' }} />
                                                </td>
                                                <td width="12%" class="text-center">
                                                    <button type="button" class="btn btn-outline-primary btn-edit"
                                                        data-id="{{ $item->id }}" data-title="{{ $item->title }}"
                                                        data-image="{{ asset($item->image) }}"
                                                        data-details="{{ htmlspecialchars($item->details) }}"
                                                        data-bs-toggle="modal" data-bs-target="#editMission">
                                                        <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                                    </button>

                                                    <a href="{{ url('admin/itemDelete', ['MissionVision', $item->id, 'tabName']) }}"
                                                        onclick="return confirm('Are you sure you want to delete this?')"
                                                        class="btn btn-outline-danger">
                                                        <i class="fa-solid fa-trash me-1"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> --}}
                            </div>

                            <div class="tab-pane fade" id="allContentCategory">
                                <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">
                                    {{ ucwords(str_replace('-', ' ', $company)) }}'s content category
                                </h4>
                                <table class="table table-bordered align-middle">
                                    <thead>
                                        <th class="px-1 center">SL</th>
                                        <th class="px-2 ">Category</th>
                                        <th class="px-1 center">Status</th>
                                        <th class="px-1 center">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($contentCategory as $item)
                                            <tr>
                                                <td class="center" width="30">{{ $loop->iteration }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td class="center">
                                                    <input type="checkbox" class="js-switch status"
                                                        data-model="MissionVision" data-id="{{ $item->id }}"
                                                        data-tab="tabName"
                                                        {{ $item->status == 'active' ? 'checked' : '' }} />
                                                </td>
                                                <td width="12%" class="text-center">
                                                    <button type="button" class="btn btn-outline-primary btn-edit"
                                                        data-id="{{ $item->id }}" data-title="{{ $item->title }}"
                                                        data-image="{{ asset($item->image) }}"
                                                        data-details="{{ htmlspecialchars($item->details) }}"
                                                        data-bs-toggle="modal" data-bs-target="#editMission">
                                                        <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                                    </button>

                                                    <a href="{{ url('admin/itemDelete', ['MissionVision', $item->id, 'tabName']) }}"
                                                        onclick="return confirm('Are you sure you want to delete this?')"
                                                        class="btn btn-outline-danger">
                                                        <i class="fa-solid fa-trash me-1"></i> Delete
                                                    </a>
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
    </div>

    <div class="modal fade" id="addContent" tabindex="-1" aria-labelledby="addContentLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addContentLabel">Create mission or vision</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/' . $company . '/mission/add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <input type="hidden" name="companyId" value="{{ $companyId }}">
                            <div class="col-md-12 mb-2">
                                <label for="company" class="form-label fs-5 mb-0">
                                    Company name
                                    <strong>[{{ ucwords(str_replace('-', ' ', $company)) }}]</strong>
                                </label>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="title" class="form-label fs-5 mb-0">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Our mission or vision" required>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="image" class="form-label fs-5 mb-0">Add image</label>
                                <input type="file" name="image" id="image" class="form-control"
                                    placeholder="Add image" required>
                            </div>
                            <div class="col-md-12">
                                <label for="summernote" class="form-label fs-5 mb-0">Details</label>
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

	<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="addCategoryLabel">Create category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/' . $company . '/category/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body py-1">
                        <div class="row">
                            <input type="hidden" name="companyId" value="{{ $companyId }}">
                            <div class="col-md-12 mb-2">
                                <label for="company" class="form-label fs-5 mb-0">
                                    Company name
                                    <strong>[{{ ucwords(str_replace('-', ' ', $company)) }}]</strong>
                                </label>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="title" class="form-label fs-5 mb-0">Category name</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Mission, Vision, Our product etc..." required>
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

    <div class="modal fade" id="editMission" tabindex="-1" aria-labelledby="editMissionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title fs-4" id="editMissionLabel">Edit mission or vision</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="editMissionForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="edit_id">
                    <input type="hidden" name="company" id="edit_companyId" value="{{ $company }}">

                    <div class="modal-body py-1">
                        <div class="row">
                            <!-- Mission Title -->
                            <div class="col-md-12 mb-2">
                                <label for="edit_title" class="form-label fs-5 mb-0">Title</label>
                                <input type="text" name="title" id="edit_title" class="form-control" required>
                            </div>

                            <!-- Image -->
                            <div class="col-md-12 mb-2">
                                <label for="edit_mission_image" class="form-label fs-5 mb-0">Mission Image</label>
                                <input type="file" name="image" id="edit_mission_image" class="form-control">
                                <div id="missionImagePreview" class="mt-2"></div>
                            </div>

                            <!-- Details (Summernote) -->
                            <div class="col-md-12">
                                <label for="edit_mission" class="form-label fs-5 mb-0">Details</label>
                                <textarea id="edit_mission" name="details"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between py-1">
                        <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success px-4">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Summernote
            $('#edit_mission').summernote({
                height: 200,
                placeholder: "Write your mission or vision here..."
            });

            const editButtons = document.querySelectorAll('.btn-edit');
            const form = document.getElementById('editMissionForm');
            const inputId = document.getElementById('edit_id');
            const inputTitle = document.getElementById('edit_title');
            const inputImage = document.getElementById('edit_mission_image');
            const imagePreview = document.getElementById('missionImagePreview');

            editButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.dataset.id;
                    const title = button.dataset.title;
                    const image = button.dataset.image;
                    const details = button.dataset.details;

                    inputId.value = id;
                    inputTitle.value = title;

                    // Summernote content
                    $('#edit_mission').summernote('code', details);

                    // Show old image preview
                    if (image) {
                        imagePreview.innerHTML =
                            `<img src="${image}" alt="Mission Image" class="rounded border" width="100" height="100">`;
                        imagePreview.style.display = 'block';
                    } else {
                        imagePreview.innerHTML = '';
                        imagePreview.style.display = 'none';
                    }

                    // Clear file input
                    inputImage.value = '';

                    // Set dynamic form action
                    form.action = `/admin/update-mission/${id}`;
                });
            });
        });
    </script>
@endsection
