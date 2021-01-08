@extends('layouts.master')
@section('page-css')

    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">

    <style type="text/css">

    </style>
@endsection

@section('main-content')

    <div class="breadcrumb">
        <h1>Participantes</h1>
        <ul>
            <li><a href="">Proponentes</a></li>
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
                                    <button type="button" class="btn btn-outline-success btn-icon m-1">
                                        <span class="ul-btn__icon">
                                            <i class="i-Add-File"></i>
                                        </span>
                                        <span class="ul-btn__text">Novo</span>
                                    </button>

                                    <button type="button" id="btnRemove" class="btn btn-outline-danger btn-icon m-1" disabled>
                                        <span class="ul-btn__icon">
                                            <i class="i-Remove-File"></i>
                                        </span>
                                        <span class="ul-btn__text">Excluir</span>
                                    </button>

                                    <button type="button" id="btnEdit" class="btn btn-outline-warning btn-icon m-1" disabled>
                                        <span class="ul-btn__icon">
                                            <i class="i-File-Edit"></i>
                                        </span>
                                        <span class="ul-btn__text">Editar</span>
                                    </button>
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


            <div class="table-responsive">
                <table id="scroll_horizontal_vertical_table" class="display nowrap table thead-light table-hover" style="width:100%">
                    @include('datatables.table_content')
                </table>
            </div>

        </div>
    </div>

@endsection

@section('page-js')

    <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.script.js')}}"></script>

@endsection
