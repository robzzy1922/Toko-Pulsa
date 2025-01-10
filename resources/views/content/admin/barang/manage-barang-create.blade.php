@extends('layout.admin.main')

@section('content')
    <div class="mt-0 main-content app-content">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Tambah Data Product</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('manage-barang') }}">Manage Barang</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data Product</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row">
                    <form action="{{ }}" method=""></form>
                    <div class="col-xl-4 col-md-4">
                        <form method="post" action="" class="card">
                            <div class="card-header">
                                <h3 class="card-title">Upload Gambar Barang</h3>
                            </div>
                            <div class=" card-body">
                                <div class="mb-5 row">
                                    <div class="mb-4 col-lg-12 col-sm-12 mb-lg-0">
                                        <input type="file" name="image" class="dropify" data-bs-height="180" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <form method="post" class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Product</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input class="form-control" name="name" type="text"
                                        placeholder="Input product name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <input class="form-control" name="price" type="text" placeholder="Input price">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" type="text" placeholder="Input description"></textarea>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary">Tambah Product</button>
                            </div>

                    </div>
                    </form>
                </div>
                <!-- End Row-->
            </div>
            <!-- CONTAINER CLOSED -->

        </div>
    </div>
@endsection

@section('scripts')
    <!-- FILE UPLOADES JS -->
    <script src="assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="assets/plugins/fileuploads/js/file-upload.js"></script>
    <!-- SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- COLOR PICKER JS -->
    <script src="assets/plugins/pickr-master/pickr.es5.min.js"></script>
    <script src="assets/js/picker.js"></script>

    <!-- MULTI SELECT JS-->
    <script src="assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="assets/plugins/multipleselect/multi-select.js"></script>

    <!-- FORMELEMENTS JS -->
    <script src="assets/js/formelementadvnced.js"></script>
    <script src="assets/js/form-elements.js"></script>
@endsection
