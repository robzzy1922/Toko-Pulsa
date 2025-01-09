@extends('layout.admin.main')
@section('content')
    <div class="mt-0 main-content app-content">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Table</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Table</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->



                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Users</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="user-data" class="table mb-2 border text-nowrap text-md-nowrap table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- CONTAINER CLOSED -->

        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script>
        $('#user-data').DataTable({
            serverSide: true,
            ajax: {
                url: "{{ route('user-datatable') }}",
                type: 'POST'
            },
            columnDefs: [{
                    targets: 0,
                    render: function(data, type, full, meta) {
                        return (meta.row + 1)
                    }
                },
                {
                    targets: -1,
                    render: function(data, type, full, meta) {
                        console.log(data);
                        let button =
                            `
                            <a href="{{ route('user-edit', ':id') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil-square me-1">Edit</i></a>
                        <a href="{{ route('user-delete', ':id') }}" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash me-1">Hapus</i></a>
                            `
                        button = button.replaceAll(':id', data)
                        return button
                    }
                }
            ],
            columns: [{
                    data: 'id'
                },
                {
                    data: 'username'
                },
                {
                    data: 'email'
                },
                {
                    data: 'id'
                }

                // {
                //     data: 'action',
                //     render: function(data, type, full, meta) {
                //         return `
            //         <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
            //         <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
            //     `;
                //     }
                // }
            ]
        });
    </script>
@endsection
