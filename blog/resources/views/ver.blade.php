       @extends('master')

       @section('conteudo')

       <h5 class="card-title">Ver cadastros</h5>
       <p class="card-text">Veja na lista abaixo, todas as coisas que foram registradas no sistema.</p>

       <table class="table bg-aeroblack table-sm" style="margin-bottom: 0px;">
       	<thead>
       		<tr>
       			<th scope="col">#</th>
       			<th scope="col">First</th>
       			<th scope="col">Last</th>
       			<th scope="col">Handle</th>
       		</tr>
       	</thead>
       	<tbody >
       		<tr class="personaltableaeroblack1">
       			<th scope="row ">1</th>
       			<td>Mark</td>
       			<td>Otto</td>
       			<td>@mdo</td>
       		</tr>
       		<tr class="personaltableaeroblack1">
       			<th scope="row ">2</th>
       			<td>Jacob</td>
       			<td>Thornton</td>
       			<td>@fat</td>
       		</tr>
       		<tr class="personaltableaeroblack1">
       			<th scope="row ">3</th>
       			<td>Larry</td>
       			<td>the Bird</td>
       			<td>@twitter</td>
       		</tr>
       	</tbody>
       </table>

       @endsection