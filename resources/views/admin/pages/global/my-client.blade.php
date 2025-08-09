@extends('admin.layouts.app')
@section('title', 'My client')

@section('content')
    @include('admin.layouts.alertMessage')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-4">
                                <form action="{{ route('admin.clients.add', 'supreme-global') }}" method="POST"
                                    class="d-flex gap-2 mb-0">
                                    @csrf
                                    <label for="clientSelect" class="d-flex align-items-center fw-bold fs-6 col-auto">Add
                                        Client:</label>
                                    <select name="client_id" id="clientSelect" class="form-select" required
                                        style="min-width: 180px;">
                                        <option value="" disabled selected>Select client</option>
                                        @foreach ($otherClients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary px-4">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-header bg-success text-center p-1 mx-1 mt-1 text-light">
                        {{ ucwords(str_replace('-', ' ', $company->name)) }}'s client list</h4>

                    <div class="card-body p-2">
                        <div class="row">
                            @foreach ($companyClients as $item)
                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <div class="border rounded shadow-sm h-100 d-flex flex-column overflow-hidden">
                                        <div class="bg-white d-flex align-items-center justify-content-center"
                                            style="height: 150px; position: relative;">
                                            {{-- Image with fallback: onerror hides image --}}
                                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                                class="img-fluid w-100 h-100" style="object-fit: contain; padding: 5px;"
                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />

                                            {{-- Fallback div: hidden by default, shows only name --}}
                                            <div class="fallback-text text-center w-100 h-100 align-items-center justify-content-center"
                                                style="display:none; position: absolute; top: 0; left: 0; padding: 5px;">
                                                <span class="fw-bold">{{ $item->name }}</span>
                                            </div>
                                        </div>

                                        {{-- If image exists, name shown below --}}
                                        <div class="text-center fw-bold mt-2" style="display: none;"
                                            id="name-below-{{ $item->id }}">
                                            {{ $item->name }}
                                        </div>

                                        <div class="p-2 border-top bg-light d-flex flex-column gap-2 mt-auto">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a
                                                    class="btn btn-sm text-dark border border-primary rounded-1 py-1 px-3 w-10">
                                                    <strong>{{ $loop->iteration }}</strong>
                                                </a>

                                                <div class="form-group mb-0 d-flex align-items-center justify-content-between border border-primary rounded-1 py-1 px-3 w-50 mx-1"
                                                    style="gap: 10px; min-width: 120px;">
                                                    <label class="small mb-0">Status</label>
                                                    <input type="checkbox" class="js-switch status"
                                                        data-model="CompanyClient" data-id="{{ $item->id }}"
                                                        {{ $item->status == 'active' ? 'checked' : '' }} />
                                                </div>

                                                <a href="{{ url('admin/itemDelete', ['CompanyClient', $item->id, 'tabName']) }}"
                                                    onclick="return confirm('Are you want to delete this?')"
                                                    class="btn btn-sm btn-outline-danger w-50">
                                                    <i class="fa-solid fa-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    // Show name below image only if image loads correctly
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const img = document.querySelector('img[alt="{{ $item->name }}"]');
                                        if (img && img.complete && img.naturalWidth !== 0) {
                                            const nameBelow = document.getElementById('name-below-{{ $item->id }}');
                                            if (nameBelow) {
                                                nameBelow.style.display = 'block';
                                            }
                                        }
                                    });
                                </script>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
