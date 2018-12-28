@foreach($items as $item)
  <li @if($item->hasChildren()) class="dropdown" @endif>
      <div><a href="{{route('admin.menu.show',['menu' => $item->id])}}"><strong>{!! $item->title !!}</strong></a> : {!! $item->hasChildren() ? '': $item->url() !!} </div>
      @if($item->hasChildren())
        <ul>
              @include(env('THEME') . '.admin.menu.menu-items', ['items' => $item->children()])
        </ul>
      @endif
  </li>
@endforeach