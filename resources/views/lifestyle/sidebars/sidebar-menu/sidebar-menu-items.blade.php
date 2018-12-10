@foreach($items as $item)
    @if($item->hasChildren())
        <li class="list-group-item list-toggle">
            <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-{{$item->id}}">{!!$item->title!!}</a>
            <ul id="collapse-{{$item->id}}" class="collapse">
                @include(env('THEME') . '.sidebars.sidebar-menu.sidebar-menu-sub-items', ['items' => $item->children()])
            </ul>
        </li>
    @else
        <li class="list-group-item">
            <a href="{!!$item->url()!!}">{!!$item->title!!}</a>
        </li>
    @endif()
@endforeach