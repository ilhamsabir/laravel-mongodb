
@extends('layouts.main')
@push('meta-head')
	<title>Data Mahasiswa</title>
@endpush
@section('content')


<div class="container mt-5">
	<div class="row">
		<div class="col-sm-12">
			<h4>List Data Mahasiswa</h4>
		</div>
	</div>
	<div class="row mt-4">
		<!-- flash message -->
		@if (\Session::has('success'))
			<div class="col-sm-12">
				<div class="alert alert-success mt-3 mb-3">
					<p>{{ \Session::get('success') }}</p>
				</div>
			</div>
		@endif

		<div class="col-sm-6">
			<a href="{{ url('add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> Add New
			</a>
		</div>
		<div class="col-md-12 mt-3">
			<table class="table table-striped" id="main-table" style="width:100%">
				<thead>
					<tr>
						<th>NIM</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Major</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($students as $item)
					<tr>
						<td>{{ $item->nim }}</td>
						<td>{{ $item->name }}</td>
						<td>
							@if ($item->gender === 'male')
								<span class="badge badge-light p-2">
									Male
								</span>
							@else
								<span class="badge badge-light p-2">
									Female
								</span>
							@endif
						</td>
						<td>
							@if ($item->major && $item->major !== null && $item->major === 'ti')
								<span class="badge badge-primary p-2">
									Teknik Informatika
								</span>
							@else
								<span class="badge badge-success p-2">
									Sistem Informasi
								</span>
							@endif
						</td>
						<td>
							<div class="d-flex">
								<!-- edit button -->
								<div class="">
									<a href="{{ action('StudentController@edit', $item->_id)}}" class="btn btn-warning" title="Edit Data">
										<i class="fa fa-edit"></i>
									</a>
								</div>
								<!-- delete button -->
								<div class="ml-2">
									<form action="{{ action('StudentController@delete', $item->_id)}}" method="post">
										@csrf
										<input name="_method" type="hidden" value="DELETE">
										<button class="btn btn-danger" type="submit" title="Delete">
											<i class="fa fa-trash"></i>
										</button>
									</form>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
@push('scripts')
	<script src="{{ asset('js/main.js') }}"></script>
@endpush
