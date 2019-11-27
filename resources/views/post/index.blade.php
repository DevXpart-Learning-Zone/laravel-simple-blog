<h2>All posts</h2>

@foreach($posts as $post)

<h3>{{ $post['title'] }}</h3>
<p>{{ $post['body'] }}</p>


@endforeach

@if(2==1)
This is a true
@elseif(1==1)
One
@else
This is fales
@endif
