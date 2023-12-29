@extends('layouts.home')


@section('title', $data->title." Menü Listesi")

@section('description')
    {{ $data->description }}
@endsection

@section('keywords',$data->keywords)

@section('author','Mert Seyhan')


@section('content')









<!-- gallery section start -->
<div class="gallery_section layout_padding ">
   <div class="container ">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="gallery_taital">{{$data->title}}</h1>
            <p class="gallery_text">Lezzetlerin Dansını Keşfedin! Menümüzdeki çeşitli yemekler arasında dolaşırken, damaklarınız unutulmaz bir yolculuğa çıkacak. Sevdiklerinizle paylaşmak veya kendi lezzet maceranızı başlatmak için menümüzdeki özel tatları keşfedin.</p>
         </div>
      </div>
      <div class="">
         <div class="gallery_section_2 ">
            <div class="row ">
              @foreach($datalist as $rs)
               <div class="col-md-4 center-button">
                  <div class="container_main">
                     <img src="{{ Storage::url($rs->image)}}" alt="Avatar" class="image m-2">
                     <div class="overlay">
                        <div class="text"><a href="{{route('product',['id'=>$rs->id])}}">{{$rs->title}}</a></div>
                     </div>
                  </div>
                   <p style="color: green; font-weight: bold; text-align: center;">{{$rs->price}} TL</p>
                   <a href="{{route('product',['id'=>$rs->id])}}" style="padding: 5px 10px; font-size: 16px; background-color: red; color: white; ">
                    Sipariş Ver
                  </a>
               </div>
               @endforeach


            </div>
         </div>


      </div>

   </div>
</div>
<!-- gallery section end -->










@endsection
