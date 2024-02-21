@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Lead ID: {{ $lead->id }}</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('admin.leads.create') }}" class="float-sm-right btn btn-primary btn-sm">Add new</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Contact Details</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>{{ $lead->name }}</td>
                        </tr>
                        <tr>
                            <th>Contact No</th>
                            <td>{{ $lead->contact }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $lead->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>Other Details</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Status</th>
                            <td>{{ $lead->status->name }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $lead->created_at->format('d M Y - h:ia') }}</td>
                        </tr>
                        <tr>
                            <th>Source</th>
                            <td>{{ $lead->source }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Requirements</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Package</th>
                            <td>{{ $lead->package_id }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{ $lead->message }}</td>
                        </tr>
                        <tr>
                            <th>#Adults</th>
                            <td>{{ $lead->adults }}</td>
                        </tr>
                        <tr>
                            <th>#Children</th>
                            <td>{{ $lead->children }}</td>
                        </tr>
                        <tr>
                            <th>Travel Date</th>
                            <td>{{ $lead->travel_date }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
@endsection

