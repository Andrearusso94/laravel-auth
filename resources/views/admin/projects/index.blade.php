@extends('layouts.admin')

@section('content')



<div class="table-responsive">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col"><a name="" id="" class="btn btn-primary" href="{{route('admin.project.create')}}" role="button">Crea</a></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($project as $proje)
            <tr class="">
                <td scope="row">{{$proje->id}}</td>
                <td>{{$proje->title}}</td>
                <td>{{$proje->slug}}</td>
                <td>
                    <div class="d-flex px-1">
                        <a name="" id="" class="btn mx-1 btn-primary" href="#" role="button">Cancella</a>
                        <a name="" id="" class="btn mx-1 btn-primary" href="#" role="button">Modifica</a>
                        <a name="" id="" class="btn mx-1 btn-primary" href="{{route('admin.project.show', $proje->slug)}}" role="button">Visualizza</a>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td>
                    No Project
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>



@endsection