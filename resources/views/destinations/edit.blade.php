@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Destination</h1>
        </div>
        <div class="col-sm-6">
            <!-- Additional header content if needed -->
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.destinations.update', ['destination' => $destination->id]) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Destination Name" name="name" type="text"
                            value="{{ old('name', $destination->name) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Slug" name="slug" type="text" value="{{ old('slug', $destination->slug) }}" />
                    </div>
                    <div></div>
                    <div class="col-md-4">
                        <x-forms.select label="Destination Type" name="type" selected="{{ old('type') }}">
                            <option value="country" {{ $destination->type == 'country' ? 'selected' : '' }}>Country</option>
                            <option value="state" {{ $destination->type == 'state' ? 'selected' : '' }}>State</option>
                            <option value="city" {{ $destination->type == 'city' ? 'selected' : '' }}>City</option>
                        </x-forms.select>
                    </div>
                    <div id="countryCol" class="col-md-4">
                        <x-forms.select label="Country" name="country" selected="{{ old('country') }}">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" {{ $country->id == $destination->parent_destination ? 'selected' : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div id="stateCol" class="col-md-4">
                        <x-forms.select label="State" name="state" selected="{{ old('state') }}">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}" {{ $state->id == $destination->parent_destination ? 'selected' : '' }}>{{ $state->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div></div>
                    <div class="col-md-4">
                        <x-forms.textarea label="Excerpt (Short Description)" name="excerpt"
                            value="{{ old('excerpt', $destination->excerpt) }}" />
                    </div>
                    <div class="col-md-8">
                        <x-forms.textarea label="Description" name="description" value="{{ old('description', $destination->description) }}" />
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
                        <img id="image-preview" src="{{ asset('storage/uploads/' . $destination->image) }}"
                            alt="Image Preview" style="max-width: 100%;">
                    </div>
                    <div class="col-md-12">
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
        $('#packages').select2();
    </script>
    <script>
        toggleType();

        $('#type').on('change', toggleType);

        function toggleType() {
            let type = $('#type').val();

            if (type == 'country') {
                $('#countryCol').hide();
                $('#stateCol').hide();
            } else if (type == 'state') {
                $('#countryCol').show();
                $('#stateCol').hide();
            } else if (type == 'city') {
                $('#countryCol').hide();
                $('#stateCol').show();
            }
        }
    </script>
    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var img = document.getElementById('image-preview');
                img.src = reader.result;
                img.style.display = 'block'; // Show the image preview
            };
            reader.readAsDataURL(input.files[0]);
        });
    </script>
@endpush

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endpush
