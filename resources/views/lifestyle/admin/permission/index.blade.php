@extends('lifestyle.layouts.admin')

@section('content')
<div class="container background-white">
    <form method="POST" action="{{route('admin.permissions.store')}}">
        @csrf
        @method('POST')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                    @foreach($roles as $role)
                        <th align="center">{{$role->name}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>
                        @foreach($roles as $role)
                            <td align="center"><input type="checkbox" name="{{$role->id}}[]" value="{{$permission->id}}"{{$role->hasPermission($permission->name) ? ' checked' : ''}}></td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Update">
        </div>
    </form>
    <br>
</div>
@endsection