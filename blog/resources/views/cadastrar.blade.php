       @extends('master')

       @section('conteudo')

       <h5 class="card-title">Cadastrar coisas</h5>

       <p>
       	<div class="row">
       		<div class="col-sm">
       			Bem-vindo ao cadastrar coisas. Caso deseje cadastrar alguma coisa nova, clique no botão ao lado.
       		</div>
       		<div class="col-sm">
       			<a class="btn btn-primary bg-aeroblack"><i class="fa fa-plus"></i> Cadastrar coisa nova</a>
       		</div> 
       	</div>
       </p>

       <div class="card bg-aeroblack">
       	<div class="card-body">

       		<form style="margin-block-end: 0px !important;">

       			<div class="form-group">
       				<label for="formGroupExampleInput2">Informação principal:</label>
       				<input type="text" class="form-control bg-aeroblack" placeholder="Digite uma informação relevante">
       			</div>

       			<div class="form-group">
       				<div class="form-row">
       					<div class="col">
       						<label for="formGroupExampleInput2">Informação secundária:</label>
       						<input type="text" class="form-control bg-aeroblack" placeholder="Digite uma informação menos relevante">
       					</div>
       					<div class="col">
       						<label for="formGroupExampleInput2">Escolha uma opção:</label>
       						<select class="custom-select bg-aeroblack" id="inlineFormCustomSelect">
       							<option selected value="1">Direção North</option>
       							<option value="2">Opção um</option>
       							<option value="3">Opção dois</option>
       							<option value="3">Opção três</option>
       						</select>
       					</div>	
       				</div>
       			</div>

       			<div class="form-group">
       				<div class="form-row"> 
       					<div class="col">		      					
       						<label for="formGroupExampleInput2">Múltipla escolha:</label><br>
       						<div class="form-check form-check-inline">
       							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
       							<label class="form-check-label" for="inlineCheckbox1">Escolha X</label>
       						</div>
       						<div class="form-check form-check-inline">
       							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
       							<label class="form-check-label" for="inlineCheckbox2">Escolha Y</label>
       						</div>
       						<div class="form-check form-check-inline">
       							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
       							<label class="form-check-label" for="inlineCheckbox2">Escolha Z</label>
       						</div>
       					</div>
       					<div class="col">	
       						<label for="customRange2">Escolha uma distância:</label>
       						<input type="range" class="custom-range" min="0" max="15" id="customRange2">
       					</div>
       				</div>
       			</div>

       			<hr>

       			<button type="submit" class="btn btn-success bg-aeroblack">Salvar cadastro</button>
       			<button type="submit" class="btn btn-warning bg-aeroblack">Fechar janela</button>

       		</form>

       	</div>
       </div>

       @endsection