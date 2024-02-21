@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Landing Page</h1>
        </div>
        <div class="col-sm-6">
            <!-- Additional header content if needed -->
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.landing-pages.update', ['landing_page' => $landingPage->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Title" name="title" value="{{ old('name', $landingPage->title) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Slug" name="slug" value="{{ old('slug', $landingPage->slug) }}" />
                    </div>
                </div>
                <div>
                    <select name="template" id="" class="form-control mb-4">
                        <option value="1" {{ $landingPage->template == 1 ? 'selected' : '' }}>Template 1</option>
                        <option value="2" {{ $landingPage->template == 2 ? 'selected' : '' }}>Template 2</option>
                    </select>
                </div>
                <div class="col-12">
                    <x-forms.select label="Packages" name="packages[]" id="packages" multiple>
                        @foreach ($packages as $package)
                            <option value="{{ $package->id }}"
                                {{ in_array($package->id, $selectedPackageIds) ? 'selected' : '' }}>
                                {{ $package->name }}</option>
                        @endforeach
                    </x-forms.select>
                </div>
                <div class="col-md-12">
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $('#packages').select2();
    </script>
@endpush
