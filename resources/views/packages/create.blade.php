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
            <form action="{{ route('admin.packages.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Package Name" name="name" type="text" value="" />
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
                    <div>
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
