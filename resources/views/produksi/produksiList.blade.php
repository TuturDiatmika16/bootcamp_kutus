@extends('layouts.base')

@section('content')
<!--begin: Datatable -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title text-uppercase m-subheader__title--separator">
                    Daftar Produksi
                </h3>
            </div>
            <a href="{{ route('ProduksiCreate') }}" class="btn btn-success"> TAMBAH PRODUKSI</a>
        </div>
    </div>
</div>

<div class="m-content">
    <div class="m-portlet__body">
        <div class="table-responsive">
            <table class="akses-list table table-bordered datatable"
                    data-url="{{ route('produksiDatatable') }}"
                    data-column="{{ json_encode($datatable_column)}}">
                <thead>
                    <tr>
                            <th width="20">No</th>
                            <th class="no-sort">Kode Produksi</th>
                            <th class="no-sort">Lokasi</th>
                            <th class="no-sort">Tanggal Mulai</th>
                            <th class="no-sort">Tanggal Selesai</th>
                            <th class="no-sort">Status</th>
                            <th class="no-sort">Publish</th>
                            <th class="no-sort">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--end: Datatable -->
@endsection
