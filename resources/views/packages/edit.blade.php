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
                        <x-forms.input label="Duration" name="duration" type="text" value="" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Price" name="price" type="number" value="" />
                    </div>
                    <div>
                        <x-forms.textarea label="Description" name="description" value="" />
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
