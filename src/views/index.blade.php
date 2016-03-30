<h1>Tags</h1>
<ul>
@foreach($tags as $tagObj)
	<li>{{ $tagObj->tag }}</li>
@endforeach
</ul>