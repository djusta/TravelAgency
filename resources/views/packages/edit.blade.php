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
            <form action="{{ route('admin.packages.update', [$package->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Package Name" name="name" type="text"
                            value="{{ old('name', $package->name) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Slug" name="slug" type="text" value="{{ old('slug', $package->slug) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Duration" name="duration" type="text"
                            value="{{ old('slug', $package->duration) }}" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Price" name="price" type="number"
                            value="{{ old('slug', $package->price) }}" />
                    </div>
                    <div>
                        <x-forms.textarea label="Description" name="description"
                            value="{{ old('slug', $package->description) }}" />
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
                    <!-- Button trigger modal -->

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
                        <img id="image-preview" src="{{ asset('storage/uploads/' . $package->image) }}" alt="Image Preview"
                            style="max-width: 100%;">
                    </div>
                    <div class="row">
                        @foreach ($locations as $value)
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p>{{ $value->name }}</p>
                                        <p>{{ $value->description }}</p>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop{{ $value->id }}">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop{{ $value->id }}" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Location</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id" value="{{ $value->id }}">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="locationname" aria-describedby="helpId" placeholder=""
                                                                value="{{ $value->name }}" />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Description</label>
                                                            <textarea class="form-control" id="Locationdescription" rows="3">{{ $value->description }}</textarea>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="close" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <a id="locationUpdate" class="btn btn-primary">Update</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a id="delete" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a id="addLocation" class="btn btn-secondary btn-sm">Add More Locations</a>
                        </div>
                    </div>
                    <section id="locations">
                        <p class="fs-2">Locations</p>
                        <hr>
                        <div class="customer_records">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="offer_name[]" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Description</label>
                                        <textarea class="form-control" name="offer_description[]" id="" rows="3"></textarea>
                                    </div>

                                </div>
                            </div>
                            <a class="extra-fields-customer btn btn-primary btn-sm mb-2" href="#">Add More
                                Locations</a>
                        </div>
                        <div class="customer_records_dynamic"></div>
                    </section>
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
    <script>
        $("#locationUpdate").on('click', function() {
            var name = $("#locationname").val();
            var description = $("#Locationdescription").val();
            if(name != '' && description != ''){
                updateLocation();
            }else{
                alert('Location Name and Description are required.')
            }
        });

        function updateLocation() {

            var name = $("#locationname").val();
            var description = $("#Locationdescription").val();
            var id = $("#id").val();

            $.ajax({
                type: "GET",
                url: "/api/location/update",
                data: {
                    id: id,
                    name: name,
                    description: description,
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                        alert('The location have been successfully updated')
                    } else {
                        alert('something went wrong?')
                    }
                }
            });
        }

        $("#delete").on('click', function() {
                destroyLocation();
        });

        function destroyLocation() {
            var id = $("#id").val();

            $.ajax({
                type: "GET",
                url: "/api/location/destroy",
                data: {
                    id: id,
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert('something went wrong?')
                    }
                }
            });
        }

        $('.extra-fields-customer').click(function() {
            $('.customer_records').clone().appendTo('.customer_records_dynamic');
            $('.customer_records_dynamic .customer_records').addClass('single remove');
            $('.single .extra-fields-customer').remove();
            $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');
            $('.customer_records_dynamic > .single').attr("class", "remove");

            $('.customer_records_dynamic input').each(function() {
                var count = 0;
                var fieldname = $(this).attr("name");
                $(this).attr('name', fieldname + count);
                count++;
            });

        });

        $(document).on('click', '.remove-field', function(e) {
            $(this).parent('.remove').remove();
            e.preventDefault();
        });

        $('#locations').hide();

        $("#addLocation").on('click', function() {
            $('#locations').show();
        });

    </script>
@endpush

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
    </style>
@endpush
