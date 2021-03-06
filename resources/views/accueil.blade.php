@extends('header')

@section('title', 'Home')

@section('content')

<div class="container home-container">
  <div class="blockStatus col-6 text-center">
    <!--       <img class="gif" src="https://media.giphy.com/media/3o7aCVTfelG4XSbv3y/giphy.gif" alt="gif">
 --></div>

  <div class="col-6 led-container">
    <div class="panel panel-default">
      <div class="panel-heading">Status de la régate :
        <font style="text-transform: uppercase;">{!! $regate->etape !!}</font>
      </div>
      <div class="panel-body">
        <i id="led1" class="led1"></i>
        <i id="led2" class="led2"></i>
        <i id="led3" class="led3"></i>
        <i id="led4" class="led4"></i>
        <i id="petitSon" class="fas fa-volume-down petitSon"></i>
        <i id="grandSon" class="fas fa-volume-up grandSon"></i>
      </div>
    </div>
  </div>
  <form method="get" action="/ledOn" enctype="multipart/form-data">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="flex">
        <div id="apercu" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn-container apercu">
          <button  type="submit" class="btn" name="apercu">Apercu</button>
        </div>
        <div  id="depart" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn-container depart ">
          <button type="submit" class="btn " name="depart">Départ</button>
        </div>
        <div id="rappel_g" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn-container rappel_g hide">
          <button  type="submit" class="btn " name="rappel_g">Rappel</br>général</button>
        </div>
        <div id="rappel_i" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn-container rappel_i hide">
          <button  type="submit" class="btn " name="rappel_i">Rappel </br>individuel</button>
        </div>
        <div id="arrivee" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn-container arrivee hide">
          <button type="submit" class="btn" name="arrivee">Arrivée</button>
        </div>
        <div id="annulation" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn-container annulation hide">
          <button  type="submit" class="btn" name="annulation">Annulation</button>
        </div>
        <div id="modification" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn-container  modification hide">
          <button  type="submit" class="btn" name="modification">Modification </br>de parcours</button>
        </div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  var test = '{!! $regate->etape !!}';
  console.log(test);
  if (test == 'apercu') {
    document.getElementById("led2").style.background = '#3399ff';
    document.getElementById("led3").style.background = '#ff9900';
    document.getElementById("grandSon").style.color = '#ff0000';
    document.getElementById("apercu").classList.remove("hide");
    document.getElementById("depart").classList.remove("hide");
    document.getElementById("rappel_g").classList.add("hide");
    document.getElementById("rappel_i").classList.add("hide");
    document.getElementById("arrivee").classList.add("hide");
    document.getElementById("annulation").classList.add("hide");
    document.getElementById("modification").classList.add("hide");
  } else if (test == 'depart') {
    var heure_dep = new Date().toLocaleTimeString();
    document.getElementById("led1").style.background = '#ff0000';
    document.getElementById("led3").style.background = '#ff9900';
    document.getElementById("grandSon").style.color = '#ff0000';
    document.getElementById("apercu").classList.add("hide");
    document.getElementById("depart").classList.add("hide");
    document.getElementById("rappel_g").classList.remove("hide");
    document.getElementById("rappel_i").classList.remove("hide");
    document.getElementById("arrivee").classList.remove("hide");
    document.getElementById("annulation").classList.remove("hide");
    document.getElementById("modification").classList.remove("hide");
  } else if (test == 'rappel_i') {
    document.getElementById("led2").style.background = '#0066ff';
    document.getElementById("led3").style.background = '#ff9900';
    document.getElementById("grandSon").style.color = '#ff0000';
    document.getElementById("apercu").classList.add("hide");
    document.getElementById("depart").classList.add("hide");
    document.getElementById("rappel_g").classList.remove("hide");
    document.getElementById("rappel_i").classList.remove("hide");
    document.getElementById("arrivee").classList.remove("hide");
    document.getElementById("annulation").classList.remove("hide");
    document.getElementById("modification").classList.remove("hide");
  } else if (test == 'rappel_g') {
    document.getElementById("led1").style.background = '#ff0000';
    document.getElementById("led2").style.background = '#0066ff';
    document.getElementById("petitSon").style.color = '#ff0000';
    document.getElementById("grandSon").style.color = '#ff0000';
    document.getElementById("apercu").classList.add("hide");
    document.getElementById("depart").classList.add("hide");
    document.getElementById("rappel_g").classList.remove("hide");
    document.getElementById("rappel_i").classList.remove("hide");
    document.getElementById("arrivee").classList.remove("hide");
    document.getElementById("annulation").classList.remove("hide");
    document.getElementById("modification").classList.remove("hide");
  } else if (test == 'arrivee') {
    var heure_arr = new Date().toLocaleTimeString();
    document.getElementById("apercu").classList.remove("hide");
    document.getElementById("depart").classList.remove("hide");
    document.getElementById("rappel_g").classList.add("hide");
    document.getElementById("rappel_i").classList.add("hide");
    document.getElementById("arrivee").classList.add("hide");
    document.getElementById("annulation").classList.add("hide");
    document.getElementById("modification").classList.add("hide");
  } else if (test == 'annulation') {
    document.getElementById("led1").style.background = '#ff0000';
    document.getElementById("led2").style.background = '#0066ff';
    document.getElementById("led3").style.background = '#ff9900';
    document.getElementById("petitSon").style.color = '#ff0000';
    document.getElementById("grandSon").style.color = '#ff0000';
    document.getElementById("apercu").classList.remove("hide");
    document.getElementById("depart").classList.remove("hide");
    document.getElementById("rappel_g").classList.add("hide");
    document.getElementById("rappel_i").classList.add("hide");
    document.getElementById("arrivee").classList.add("hide");
    document.getElementById("annulation").classList.add("hide");
    document.getElementById("modification").classList.add("hide");
  } else if (test == 'modification') {
    document.getElementById("led1").style.background = '#ff0000';
    document.getElementById("led2").style.background = '#0066ff';
    document.getElementById("led3").style.background = '#ff9900';
    document.getElementById("petitSon").style.color = '#ff0000';
    document.getElementById("grandSon").style.color = '#ff0000';
    document.getElementById("apercu").classList.remove("hide");
    document.getElementById("depart").classList.remove("hide");
    document.getElementById("rappel_g").classList.add("hide");
    document.getElementById("rappel_i").classList.add("hide");
    document.getElementById("arrivee").classList.add("hide");
    document.getElementById("annulation").classList.add("hide");
    document.getElementById("modification").classList.add("hide");
  }
</script>
