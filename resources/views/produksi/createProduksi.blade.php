@extends('layouts.base')

@section('content')
<!--begin: Datatable -->
<div class="m-content">
    <div class="m-portlet akses-list">
        <div class="m-portlet__body">
            <form action="{{ route('tambahProduksi') }}" class="m-form" method="POST">
                @csrf
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group m-form__group">
                                <label for="example_input_full_name">
                                    Full Name:
                                </label>
                                <input type="email" class="form-control m-input" placeholder="Enter full name">
                                <span class="m-form__help">
                                    Please enter your full name
                                </span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group m-form__group">
                                <label for="example_input_full_name">
                                    Full Name:
                                </label>
                                <input type="email" class="form-control m-input" placeholder="Enter full name">
                                <span class="m-form__help">
                                    Please enter your full name
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <button type="reset" class="btn btn-primary">
                            Tambah Produksi
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end: Datatable -->
@endsection
