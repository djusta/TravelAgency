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

            <div class="card">

                <div class="card-header bg-info">
                    <h3 class="text-center">Destinations</h3>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ $destinations->where('type', 'country')->count() }}</h5>
                                <span class="description-text">{{ $destinations->where('type', 'country')->count() == 1 ? 'Country' : 'Countries' }}</span>
                            </div>

                        </div>

                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ $destinations->where('type', 'state')->count() }}</h5>
                                <span class="description-text">{{ $destinations->where('type', 'state')->count() == 1 ? 'State' : 'States' }}</span>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{ $destinations->where('type', 'city')->count() }}</h5>
                                <span class="description-text">{{ $destinations->where('type', 'city')->count() == 1 ? 'City' : 'Cities' }}</span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
@endpush
