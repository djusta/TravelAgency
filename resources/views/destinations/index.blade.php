@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Destinations</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('admin.destinations.create') }}" class="float-sm-right btn btn-primary btn-sm">Add new</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th width="105px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var dataTable = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "{{ route('admin.destinations.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'type',
                        name: 'type'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    //   {data: 'content', name: 'content'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });

        $(document).on('click', '.delete', function(dataTable) {
            var id = $(this).data('id');
            var dataTable = $('.data-table').DataTable();

            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    url: '/admin/destinations/' + id, // Replace with your delete route
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Handle success, e.g., update DataTable or perform other actions
                        dataTable.ajax.reload();
                    },
                    error: function(error) {
                        console.error('Error deleting record:', error);
                    }
                });
            }
        });
    </script>
@endpush

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
@endpush