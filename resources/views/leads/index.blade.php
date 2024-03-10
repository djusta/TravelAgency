@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Leads</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('admin.leads.create') }}" class="float-sm-right btn btn-primary btn-sm">Add new</a>
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
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created At</th>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script type="text/javascript">
        $(function() {
            const table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: "{{ route('admin.leads.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'contact',
                        name: 'contact'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data) {
                            // Format the date
                            return moment(data).format(
                                'DD-MMM-y HH:mm:ss'); // Adjust the format as needed
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [5, 'desc'] // Default ordering by the 'created_at' column in descending order
                ]
            });

            // Log the data received from the server
            table.on('xhr', function() {
                console.log(table.ajax.json());
            });
        });

        $(document).on('click', '.delete', function(dataTable) {
            var id = $(this).data('id');
            var dataTable = $('.data-table').DataTable();

            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    url: '/admin/leads/' + id, // Replace with your delete route
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
