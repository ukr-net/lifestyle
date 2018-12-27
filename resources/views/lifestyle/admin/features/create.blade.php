@extends('lifestyle.layouts.admin')

@section('content')
<div class="container background-white">
    <form method="POST" action="{{isset($feature->id) ? route('admin.features.update', ['id' => $feature->id]) : route('admin.features.store')}}">
        @csrf
        @if (isset($feature->id))
            @method('PUT')
        @else
            @method('POST')
        @endif
        <div class="form-group">
            <label for="Name">Name</label>
            <input 
            type="text" 
            class="form-control" 
            id="feature-name" 
            name="title" 
            value="{{isset($feature->title) ? $feature->title : ''}}"
            required>
            <label for="alias">Alias</label>
            <input 
            type="text" 
            class="form-control" 
            id="feature-alias" 
            name="alias" 
            value="{{isset($feature->alias) ? $feature->alias : ''}}"
            required>
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea id="reature-text" name="text" rows="10" required>
                {{isset($feature->text) ? $feature->text : ''}}
            </textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{isset($feature->alias) ? 'Update' : 'Create'}}">
        </div>
    </form>
</div>
@endsection