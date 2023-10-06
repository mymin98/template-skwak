@extends('adminlte::page')

@section('title', 'SIARefEdit')

@section('content_header')
    <h1>SIA Ref Edit</h1>
@stop

@section('content')


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">SIA Ref</h3>
                    </div>


                    <form>
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
