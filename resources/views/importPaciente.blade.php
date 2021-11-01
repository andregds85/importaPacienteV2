@extends('layouts4.app')
@section('content')
 <?php
 $macro=Auth::user()->macro;
 $perfil= Auth::user()->perfil;

 if($perfil<>"regulacao"){
    session()->flush();
 }

 ?>

<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Modelo para importar EXCEL</h5>
      <p class="card-text">A extensão do Arquivo XLSX, não colocar a linha 1 da foto. </p>
    </div>
  </div>

<div class="container">
	<form action={{url('importpacie') }} method="POST" name="importform"
	  enctype="multipart/form-data">
		@csrf
        <div class="form-group">
			<label for="file">File:</label>
			<input id="file" type="file" name="file" class="form-control">
		</div>
        <button class="btn btn-success">Import File</button>
    </form>
</div>

<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Modelo para importar EXCEL</h5>
      <p class="card-text">A extensão do Arquivo XLSX, não colocar a linha 1 do modelo do Modelo para baixar com os titulos </p>
      <p class="card-text">Apague a Linha 1 do Excel com os titulos. </p>

      <p> <a href="img/modelo.xlsx"> Aqui </a>
    </div>
  </div>


  <div class="card mb-3">
    <div class="card-body">
    <img src="img/foto.jpg" class="img-fluid" alt="Responsive image">
    </div>
  </div>
@endsection
