@extends('lifestyle.layouts.admin')

@section('content')
<div class="container background-white">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Text</th>
                <th>Alias</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($features as $feature) 
            <tr>
                <th>{{$feature->id}}</th>
                <td><a href="{{route('admin.features.edit', ['feature' => $feature->id])}}">{{$feature->title}}</a></td>
                <td>{{str_limit($feature->text,500)}}</td>
                <td>{{$feature->alias}}</td>
                <td>
                    <form>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div><a href="{{route('admin.features.create')}}" class="btn btn-success">New</a></div>
    <!-- Pagination -->
    {{$features->links()}}
    <!-- End Pagination -->
</div>
@endsection