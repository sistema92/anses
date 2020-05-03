<link rel="stylesheet" href="css/error.css">
@if(count($errors))
<div class="alert alert-danger" role="alert" id="error">
<ul>
    @foreach($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach
</ul>
</div>
@endif
