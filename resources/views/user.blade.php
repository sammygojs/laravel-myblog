@include('header')
<a href="{{url('about')}}">About</a>
@foreach($names as $name)
{{$name}},
@endforeach