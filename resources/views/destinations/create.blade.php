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
            <form action="{{ route('admin.destinations.store') }}" method="post">
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
                        <x-forms.select label="Destination Type" name="type" selected="{{ old('type') }}">
                            <option value="country">Country</option>
                            <option value="state">State</option>
                            <option value="city">City</option>
                        </x-forms.select>
                    </div>
                    <div id="countryCol" class="col-md-4">
                        <x-forms.select label="Parent Destination" name="country" selected="{{ old('country') }}">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div id="stateCol" class="col-md-4">
                        <x-forms.select label="Parent Destination" name="state" selected="{{ old('state') }}">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
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
@endpush