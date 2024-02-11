@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Destination</h1>
        </div>
        <div class="col-sm-6">
            <!-- Additional header content if needed -->
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.destinations.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Destination Name" name="name" type="text" value="{{ old('name') }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Slug" name="slug" type="text" value="{{ old('slug') }}" />
                    </div>
                    <div class="col-12"></div>
                    <div class="col-md-4">
                        <x-forms.select label="Destination Type" name="type">
                            <option value="country" @if (old('type') == 'country') selected @endif>Country</option>
                            <option value="state" @if (old('type') == 'state') selected @endif>State</option>
                            <option value="city" @if (old('type') == 'city') selected @endif>City</option>
                        </x-forms.select>
                    </div>
                    <div id="countryCol" class="col-md-4">
                        <x-forms.select label="Parent Destination" name="country">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" @if (old('country') == $country->id) selected @endif>
                                    {{ $country->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div id="stateCol" class="col-md-4">
                        <x-forms.select label="Parent Destination" name="state">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value={{ $state->id }} @if (old('state') == $state->id) selected @endif>
                                    {{ $state->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-md-4">
                        <x-forms.textarea label="Excerpt (Short Description)" name="excerpt" value="{{ old('excerpt') }}" />
                    </div>
                    <div class="col-md-8">
                        <x-forms.textarea label="Description" name="description" value="{{ old('description') }}" />
                    </div>
                    <!-- Image upload -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Image preview -->
                        <img id="image-preview" src="#" alt="Image Preview" style="max-width: 100%; display: none;">
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
            reader.onload = function(){
                var img = document.getElementById('image-preview');
                img.src = reader.result;
                img.style.display = 'block'; // Show the image preview
            };
            reader.readAsDataURL(input.files[0]);
        });
    </script>
@endpush
