@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Landing Page</h1>
        </div>
        <div class="col-sm-6">
            <!-- Additional header content if needed -->
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.landing-pages.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <x-forms.input label="Title" name="title" />
                    </div>
                    <div class="col-md-4">
                        <x-forms.input label="Slug" name="slug" />
                    </div>
                </div>
                <div>
                    <select name="template" id="" class="form-control mb-4">
                        <option value="1">Template 1</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection