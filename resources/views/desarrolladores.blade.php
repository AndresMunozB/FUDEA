@extends('layouts.inicio')

@php ($pagina = 'quienes')

@section('title')
Desarrolladores
@endsection

@section('content')
<div class="col-md-12 text-center" style="color: white">


<h1> <b>Nuestro plantel</b> </h1>
<h2> <b> FUNDAMENTOS DE INGENIERÍA DE SOFTWARE - Primer semestre 2017</b></h2>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <center>
  <div class="carousel-inner" role="listbox">

    <div class="item active">   
    <br> <h2><b> Andres Muñoz - (El machine) <br> <p>Front-end Developer</p> </b> </h2><br>
      <img src="{{ asset('images/andres.jpg') }}" title="Andres Muñoz - (Machine)" width="500" height="500" alt="...">
      <div class="carousel-caption">
      </div>
    </div>

   <div class="item">
    <br> <h2><b> Cristian Espinoza <br> <p>Front-end Developer</p> </b></h2> <br> 
      <img src="{{ asset('images/cristian.jpg') }}" title="Cristian Espinoza - (Huaso)" width="500" height="500" alt="...">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
    <br> <h2><b> Cristian Sepulveda</b> <br> <p>Back-end Developer</p>  </h2><br>
      <img src="{{ asset('images/cristian2.jpg') }}" title="Cristian Sepulveda - (-)" width="500" height="500" alt="...">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
    <br> <h2><b> Javier Arredondo - (Ingeniero software) <br> <p>Front-end Developer</p>  </b></h2><br> 
      <img src="{{ asset('images/javier.jpg') }}" title="Javier Arredondo - (Ingeniero software)" width="500" height="500" alt="...">
      <div class="carousel-caption">      
      </div>
    </div>


    <div class="item">
    <br> <h2><b> Cristobal Donoso <br> <p>Back-end Developer</p> </b></h2><br>
      <img src="{{ asset('images/cristobal.jpg') }}" title="Cristobal Donoso - (-)" width="500" height="500" alt="...">
      <div class="carousel-caption">
      </div>
    </div>

  </div>
  </center>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>               

@endsection