@extends('lifestyle.layouts.admin')

@section('content')
<div class="container background-white">
    <form method="POST" action="{{isset($item->id) ? route('admin.menu.update', ['menu' => $item->id]) : route('admin.menu.store')}}">
        @csrf
        @if (isset($item->id))
            @method('PUT')
        @else
            @method('POST')
        @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{isset($item->title) ? $item->title : ''}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">URL</label>
            <input type="text" class="form-control" id="url" name="url" value="{{isset($item->url) ? $item->url : ''}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">ICO</label>
            <input type="text" class="form-control" id="ico" name="ico" value="{{isset($item->url) ? $item->url : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Parent</label>
            @if(isset($menu))
                <select class="selectpicker show-tick" id="parent" name="parent" data-show-icon="true" data-size="10">
                    <option value="0" data-content="No parent">No parent</option>
                    @foreach($menu->all() as $menuItem)
                        @if(!(isset($item->id) && ($menuItem->id == $item->id)))
                            <option value="{{$menuItem->id}}" data-icon="{{$menuItem->ico}}" {{$menuItem->id == $item->parent ? 'selected' : ''}}>{{$menuItem->title}}</option>
                        @endif
                    @endforeach
                </select>
            @endif
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{isset($item->id) ? 'Update' : 'Create'}}">
        </div>
    </form>
</div>
@endsection