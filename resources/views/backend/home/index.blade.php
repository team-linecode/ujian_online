@extends('backend.master')

@section('content')

<div class="row justify-content-center">
	<div class="col-lg-12">
		<div class="card m-3 shadow">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table text-center table-bordered DataTables">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>Nim</th>
								<th>Username</th>
								<th>Password</th>
								<th>Kelas</th>
								<th>Level</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no =1; @endphp
							<tr>
								<td>{{ $no++ }}.</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
									<button href="" class="btn btn-danger btn-sm confirm-delete"><i class="fas fa-trash"></i></button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop