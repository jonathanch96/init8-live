<ul>
	@foreach($items as $menu_item)
	<li>
		<a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
		@php
		$submenu = $menu_item->children;
		@endphp

		@if(isset($submenu))
		<ul class="dropdown">
			@foreach($submenu as $item)
			<li><a href="{{$item->url}}">{{$item->title}} </a></li>
			@endforeach
		</ul>
		@endif
	</li>
	@endforeach
</ul>

