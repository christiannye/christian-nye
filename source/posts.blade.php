<p>Total of {{ $posts->count() }} posts</p>

<ul>
@foreach ($posts as $post)
<a href="{{ $post->getPath() }}">
    <li>{{ $post->title }}</li>
</a>
@endforeach
</ul>
