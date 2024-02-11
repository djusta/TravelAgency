@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Package</h1>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.packages.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Package Name" name="name" type="text" value="" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Slug" name="slug" type="text" value="{{ old('slug') }}" />
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
                    <div>
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
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