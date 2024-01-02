@extends('layouts.home')


@section('title', 'Sıkça Sorulan Sorular')

@section('headerjs')

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

@endsection

@section('author','Mert Seyhan')

@section('content')


<br><br><br><br><br>

<div class="section">
  <div class="container text-center">
    <div class="row justify-content-center">


      <div class="col-md-12 ">
          <h1 class="mb-4 ">Sıkça Sorulan Sorular</h1>
      </div>

      <div class="col-md-12 ">

          <div id="accordion">
                  @foreach($datalist as $rs)

                    <h4>{{$rs->question}}</h4>
              <div>
                    <p>{!!$rs->answer!!}</p>
              </div>
                  @endforeach
          </div>

      </div>

    </div>
  </div>
</div>


<br><br><br><br><br><br><br>



@endsection
