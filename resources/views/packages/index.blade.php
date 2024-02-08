@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Packages</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('admin.packages.create') }}" class="float-sm-right btn btn-primary btn-sm">Add new</a>
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
                        <th>Description</th>
                        {{-- <th>Content</th> --}}
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
    <script type="text/javascript">
        $(function() {
            const table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: "{{ route('admin.packages.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
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
                    url: '/admin/packages/' + id, // Replace with your delete route
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
