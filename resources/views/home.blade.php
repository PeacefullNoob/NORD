@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 30px;">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
           <li style="font-size: 20px;"><a href="/admin/create" style="color: #caddff;"><i class="fa fa-file-o"></i>Create Album</a></li>
           <li style="font-size: 20px;"><a href="/admin/albums/all_albums" style="color: #caddff;">Albums</a>
           <li style="font-size: 20px;"> <a href="/admin/photos/allPhotos" style="color: #caddff;">All Media</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
