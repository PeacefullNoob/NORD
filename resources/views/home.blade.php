@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                    <li> <a href="/admin/create"><i class="fa fa-file-o"></i>Create Album</a></li>
                    <li> <a href="/admin/albums/all_albums">Albums</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
