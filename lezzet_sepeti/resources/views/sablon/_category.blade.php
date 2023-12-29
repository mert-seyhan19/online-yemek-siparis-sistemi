@php
  $parentCategories = \App\Http\Controllers\SayfalarControl::categorylist()
@endphp

<div class="category-nav">

  <ul class="category-list">
    @foreach($parentCategories as $rs)
      <li class="dropdown side-dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expended="true" href="">{{$rs->title}} <i class="fa fa-angle-right"></i></a>
          <div class="custom-menu">
            <div class="row">
              @if(count($rs->children))
                @include('sablon.categorytree',['children' => $rs->children])
              @endif
            </div>
          </div>
      </li>
    @endforeach
  </ul>
</div>
