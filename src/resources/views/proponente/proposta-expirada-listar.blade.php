@extends('layouts.master')
@section('page-css')

    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">

    <style type="text/css">

    </style>
@endsection

@section('main-content')
    <div class="breadcrumb">
        <h1>Propostas</h1>
        <ul>
            <li><a href="">Expiradas</a></li>
            <li>Lista</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">


                                </div>

                                <div class="col-md-6 text-right">
                                    <button type="button" id="btnPrint" class="btn btn-outline-primary btn-icon m-1" disabled>
                                        <span class="ul-btn__icon">
                                            <i class="i-File-Pie"></i>
                                        </span>
                                        <span class="ul-btn__text">Imprimir</span>
                                    </button>

                                    <button type="button" id="btnPdf" class="btn btn-outline-primary btn-icon m-1" disabled>
                                        <span class="ul-btn__icon">
                                            <i class="i-File-Loading"></i>
                                        </span>
                                        <span class="ul-btn__text">PDF</span>
                                    </button>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-3">
                        <div class="card-body">
            <div class="table-responsive">
                <table id="scroll_horizontal_vertical_table" class="display nowrap table thead-light table-hover" style="width:100%">
                    @include('datatables.proposta-expirada')

                </table>
            </div>
            </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <livewire:form-no-sql></livewire:form-no-sql>
        </div>
    </div>

@endsection

@section('page-js')

    <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.script.js')}}"></script>



@endsection

@section('bottom-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
        $(document).ready(function(){
            $('#cpf').mask('999.999.999-94');
            $('#paiDesconhecido').


        });
    </script>
@endsection

