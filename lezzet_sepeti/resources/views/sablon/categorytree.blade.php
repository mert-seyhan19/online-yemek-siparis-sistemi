

@foreach($children as $subcategory)

  <ul class="list-links">
    @if(count($subcategory->children))
      <li style="color:white; font-family='Arial Black';">{{$subcategory->title}}</li>
      <ul class="list-links">
        @include('sablon.categorytree',['children' => $subcategory->children])
      </ul>
      <hr>
    @else
      <li><a href="{{route('categoryproducts',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>

    @endif
  </ul>

@endforeach
