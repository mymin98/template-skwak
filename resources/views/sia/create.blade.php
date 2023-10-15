@extends('adminlte::page')

@section('title', 'SIARefCreate')

@section('content_header')
    <h1>SIA Ref Create</h1>
@stop

@section('content')


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">SIA Ref</h3>
                    </div>

                    <form action="{{ Route('sia.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="siaRef_kod">Kod SIA</label>
                                <input type="text" class="form-control" name="siaRef_kod" id="siaRef_kod"
                                    placeholder="Masukkan Kod SIA" required>
                            </div>
                            <div class="form-group">
                                <label for="siaRef_desc">Diskripsi</label>
                                <input type="text" class="form-control" name="siaRef_desc" id="siaRef_desc"
                                    placeholder="Masukkan Diskripsi">
                            </div>

                            <div class="form-group">
                                <label for="created_at">Created by</label>
                                <input type="date" class="form-control" name="created_at" id="created_at"
                                    placeholder="Created by">
                            </div>
                            <div class="form-group">
                                <label for="created_by">Created by</label>
                                <input type="text" class="form-control" name="created_by" id="created_by"
                                    placeholder="Created by">
                            </div>
                            <div class="form-group">
                                <label for="updated_by">Updated by</label>
                                <input type="text" class="form-control" name="updated_by" id="updated_by"
                                    placeholder="Updated by">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
