@extends('layouts.admin')

@section('content')

<div class="table-responsive">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($project as $proj)
            <tr class="">
                <td scope="row">{{$proj->id}}</td>
                <td>{{$proj->title}}</td>
                <td>{{$proj->slug}}</td>
                <td> <a name="" id="" class="btn btn-primary" href="#" role="button">Button</a>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Button</a>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Button</a>
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