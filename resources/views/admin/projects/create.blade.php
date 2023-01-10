@extends('layouts.admin')
@section('content')

<h1>Crea Nuovo Prodotto</h1>
<form action="{{route('admin.project.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Descrizione</label>
            <input type="text" name="body" id="body" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
</form>
@endsection