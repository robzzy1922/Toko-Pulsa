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
            <form action="{{ route('barang-store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Upload Gambar Barang</h3>
                            </div>
                            <div class=" card-body">
                                <div class="mb-5 row">
                                    <div class="mb-4 col-lg-12 col-sm-12 mb-lg-0">
                                        <input type="file" name="image" class="dropify"
                                            data-allowed-file-extensions="jpg jpeg png gif" data-bs-height="180" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <div class="card">
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
                                    <input class="form-control" id="price" name="price" type="text"
                                        placeholder="Input price">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" id="summernote" name="description" type="text"
                                        placeholder="Input description"></textarea>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary">Tambah Product</button>
                            </div>
                        </div>
                    </div>

            </form>

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

{{-- SUMMERNOTE Editor JS --}}
<script src="assets/plugins/summernote/summernote1.js"></script>
<script src="assets/js/summernote.js"></script>

<script type="text/javascript">
    var rupiah = document.getElementById('price');
    rupiah.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
@endsection