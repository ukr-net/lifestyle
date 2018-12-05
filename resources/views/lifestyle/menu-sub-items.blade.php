@foreach($items as $item)
    <li @if($item->hasChildren()) class="parent" @endif>
    @if($item->hasChildren())
        <span @if($item->data('ico')) class="{!!$item->data('ico')!!}" @endif >{!!$item->title!!}</span>
        <ul>
            @include(env('THEME') . '.menu-sub-items', ['items' => $item->children()])
        </ul>
    @else
        <a href="{!!$item->url()!!}" @if($item->data('ico')) class="{!!$item->data('ico')!!}" @endif >{!!$item->title!!}</a>
    @endif()
    </li>
@endforeach