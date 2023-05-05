<h1>{{$heading}}</h1>

@foreach($recipes as $recipe)
<h2>
    {{$recipe['title']}}
</h2>
@endforeach