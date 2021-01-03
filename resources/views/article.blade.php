@include('includes.head')
@include('includes.header')
<ul><li>{{$post->id}}</li>
    <li>{{$post->title}}</li></ul>

<button type="submit"><a href="{{route('posts')}}">Posts</a></button>
