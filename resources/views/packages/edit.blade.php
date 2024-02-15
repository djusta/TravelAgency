@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Package</h1>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.packages.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Package Name" name="name" type="text"
                            value="{{ old('name', $package->name) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Slug" name="slug" type="text" value="{{ old('slug', $package->slug) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Duration" name="duration" type="text" value="{{ old('slug', $package->duration) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Price" name="price" type="number" value="{{ old('slug', $package->price) }}" />
                    </div>
                    <div>
                        <x-forms.textarea label="Description" name="description" value="{{ old('slug', $package->description) }}" />
                    </div>
                    <div class="col-12">
                        <x-forms.select label="Destinations" name="destinations[]" id="destinations" multiple>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id }}"
                                    {{ in_array($destination->id, $selectedDestinationIds) ? 'selected' : '' }}>
                                    {{ $destination->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <!-- Add image upload field -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                id="image" name="image" accept="image/*">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <img id="image-preview" src="{{ asset('storage/uploads/' . $package->image) }}"
                            alt="Image Preview" style="max-width: 100%;">
                    </div>
                    <div>
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $('#destinations').select2();
    </script>
@endpush

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
    </style>
@endpush
