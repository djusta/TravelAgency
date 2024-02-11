@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div>
        {{-- <div class="col-sm-6">
            <a href="{{ route('admin.destinations.create') }}" class="float-sm-right btn btn-primary btn-sm">Add new</a>
        </div> --}}
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <x-widgets.admin-lead  :leads="$leads" />
        </div>
        <div class="col-md-4">
            <x-widgets.admin-destination  :destinations="$destinations" />
        </div>
    </div>
@endsection

@push('scripts')
@endpush
