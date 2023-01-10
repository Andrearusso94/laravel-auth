@extends('layouts.admin')
@section('content')

<h1>Crea Nuovo Prodotto</h1>
<form action="{{route('admin.project.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
</form>
@endsection