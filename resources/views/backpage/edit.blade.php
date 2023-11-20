<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                        <div class="full-background"
                            style="background-image: url('{{ asset('assets/admin/img/header-blue-purple.jpg') }}')">
                        </div>
                        <div class="card-body text-start p-4 w-100">
                            <h3 class="text-white mb-2">Kecak Dance Bali 🔥</h3>
                            <p class="mb-4 font-weight-semibold">
                                The Dramatic Kecak Dance
                            </p>
                            <img src="{{ asset('assets/admin/img/3d-cube.png') }}" alt="3d-cube"
                                class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Edit new packages</h6>
                                </div>
                                <div class="ms-auto d-flex">
                                    <a href="{{ route('dashboard') }}" type="button"
                                        class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                        <span class="btn-inner--text">Back</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <form action="{{ route('package.update', $package) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-12">
                                        @if (session('error'))
                                            <div class="alert alert-danger" role="alert" id="alert">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert" id="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-12 ">
                                        <div class="card " id="basic-info">
                                            <div class="card-header">
                                                <h5>Edit Package</h5>
                                            </div>
                                            <div class="pt-0 card-body">

                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="code">Code</label>
                                                        <input type="text" name="code" id="code"
                                                            value="{{ old('code', $package->package_code) }}"
                                                            class="form-control">
                                                        @error('code')
                                                            <span class="text-danger text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="name">Package Name</label>
                                                        <input type="text" name="name" id="name"
                                                            value="{{ old('name', $package->package_name) }}"
                                                            class="form-control">
                                                        @error('name')
                                                            <span class="text-danger text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="location">Location</label>
                                                        <input type="text" name="location" id="location"
                                                            value="{{ old('location', $package->location) }}"
                                                            class="form-control">
                                                        @error('location')
                                                            <span class="text-danger text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="comunity">Comunity</label>
                                                        <select id="comunity" name="comunity" class="form-control">
                                                            @foreach ($comunities as $item)
                                                                @if ($item->id == $package->comunity_id)
                                                                    <option value="{{ $item->id }}" selected>
                                                                        {{ $item->comunity_name }}</option>
                                                                @else
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->comunity_name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('comunity')
                                                            <span class="text-danger text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <label for="desc">Package Description</label>
                                                    <textarea name="desc" id="desc" rows="5" class="form-control">{{ old('desc', $package->package_desc) }}</textarea>
                                                    @error('desc')
                                                        <span class="text-danger text-sm">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="row p-2">
                                                    <label for="image">Image</label>
                                                    <img src="{{ asset($package->package_img) }}" alt="pattern-lines"
                                                        class="top-0 rounded-2  start-0 w-10 h-10 mb-3">
                                                    <input type="file" name="image" id="image"
                                                        value="{{ old('image') }}" class="form-control">
                                                    @error('image')
                                                        <span class="text-danger text-sm">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <button type="submit"
                                                    class="mt-6 mb-0 btn btn-white btn-sm float-end">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
