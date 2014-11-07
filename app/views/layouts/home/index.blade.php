<ul class="menu">
    @foreach($items as $item)
        <li>{{ $item->title }}</li>
    @endforeach
</ul>