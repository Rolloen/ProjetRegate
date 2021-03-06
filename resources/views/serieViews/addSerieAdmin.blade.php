@extends('Header')

@section('title', 'BoatAdmin')

@section('content')

<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 centered">
  <h1>Ajout d'une nouvelle série:</h1>
  <form class="boat-form" action="/admin/serie/add" method="post" style="margin-top: 20px;">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
      <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-3">
        <label for="serie">Type: </label>
        <input type="text" class="form-control" name="type" value="" id="type" required>
      </div>
      <div class="form-group col-xs-3 col-sm-3 col-md-3  col-lg-3">
        <label for="name">Coefficient: </label>
        <input type="number" class="form-control" name="coefficient" value="" id="coefficient" placeholder="1 est le coefficient de base" step="0.01" required>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Ajouter cette serie</button>
        </div>
      </div>
      <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <a class="btn btn-info" href="{{ url('/admin/gestion') }}" role="button"> Annuler</a>
      </div>
  </form>
</div>
@endsection
