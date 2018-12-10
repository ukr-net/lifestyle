@foreach($items as $item)
    <li>
        <a href="{!!$item->url()!!}">
            @if($item->data('ico')) <i class="fa {{$item->data('ico')}}"></i> @endif
            {!!$item->title!!}
        </a>
    </li>
@endforeach