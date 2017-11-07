@extends('app')
@section('js')
{!! Html::script('assets/js/proccessSearch.js') !!}
@endsection
@section('content')
<div class="container">
    <div class="row">
       <form id="form-search" name="form-search" class="form-inline" >
          <div class="form-group">
            <label for="keyword">Keyword</label>
            <input type="text" class="form-control" id="keyword" name="keyword">
        </div>
        <button id="sbmt" name="sbmt" class="btn btn-primary">Submit</button>
    </form><div id="form-errors"></div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>Id Producto </th>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>
@endsection