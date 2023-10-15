@extends('adminlte::page')

@section('title', 'SIARefList')

@section('content_header')
    <h1>SIA Ref List</h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">SIA Ref List</h3>
                    </div>
                    
                    <a href="{{ route('sia.create') }}" class="btn btn-primary my-4 py-2" >Create New SIA</a>
                   
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>SiaRef_ID</th>
                                <th>Kod SIA</th>
                                <th>Diskripsi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sIARefs as $sIARef)
                                <tr>
                                    <td>{{ $sIARef->siaRef_ID }}</td>
                                    <td>{{ $sIARef->siaRef_kod }}</td>
                                    <td>{{ $sIARef->siaRef_desc }}</td>
                                    <td>{{ $sIARef->created_at }}</td>
                                    <td>
                                        {{-- <a href="{{ route('sia.show', $sIARef->siaRef_ID) }}" class="btn btn-info">View</a> --}}
                                        {{-- <a href="{{ route('sia.edit', $sIARef->siaRef_ID) }}" class="btn btn-primary">Edit</a> --}}
                                        {{-- <form action="{{ route('sia.destroy', $sIARef->siaRef_ID) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
