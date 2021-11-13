@extends('layouts.base')

@section('css')
    <link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css">
    
@endsection

@section('js')
    <script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/custom/crud/datatables/basic/paginations.js')}}" type="text/javascript"></script>
@endsection

@section('content')
<!--begin: Datatable -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="subheader">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title text-uppercase m-subheader__title--separator">
                        Tambah Produksi
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="m-content">
        <div class="m-portlet akses-list">
            <form   method="POST" 
                    action="{{route('ProduksiInsert')}}"
                    class="form-send m-form m-form--fit m-form--label-align-right"
                    data-redirect="{{route('produksiList')}}">

                    {{csrf_field()}}
                    
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label>
                                Kode Produksi
                            </label>
                            <input type="text" name="kode_produksi" class="form-control m-input">
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Mulai Produksi
                            </label>
                            <input type="date" name="tgl_mulai_produksi" class="form-control m-input">
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Selesai Produksi
                            </label>
                            <input type="date" name="tgl_selesai_produksi" class="form-control m-input">
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Pabrik
                            </label>
                            <select name="id_lokasi" class="form-control m-input">
                                @foreach ($lokasi as $row)
                                <option value="{{$row->id}}">{{$row->kode_lokasi. ' - '.$row->lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group m-form__group">
                            <label>
                                Catatan
                            </label>
                            <textarea name="catatan" class="form-control m-input"></textarea>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <button type="submit" class="btn btn-primary">
                            Mulai Produksi
                        </button>
                        <a href="{{ route('produksiList') }}" class="btn btn-secondary">
                            Kembali ke Daftar
                        </a>
                    </div>
            </form>
        </div>
    </div>
@endsection
