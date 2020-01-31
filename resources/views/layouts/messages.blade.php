@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class = "container-fluid callout alert">
{{$error}}
</div>
.@endforeach
@endif

@if(session('success'))
<div class = 'container-fluid callout success'>
{{session('success')}}
</div>
@endif
@if(session('error'))
<div class = "container-fluid callout alert">
{{session('error')}}
</div>
@endif