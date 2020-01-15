
@extends('layouts.main')
@push('meta-head')
	<title>Add Data Mahasiswa</title>
@endpush
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ url('') }}">
                <i class="fa fa-chevron-left"></i> Back
            </a>
        </div>
        <div class="col-sm-12 mt-4">
            <h4>Add New</h4>
        </div>
    </div>
	<div class="row mt-4">
        <div class="col-sm-6">
            <form method="post" action="{{url('add')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">NIM</label>
                    <input type="text" class="form-control" name="nim" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select name="gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Major</label>
                    <select name="major" class="form-control" required>
                        <option value="">Select Major</option>
                        <option value="ti">Teknik Informatika</option>
                        <option value="si">Sistem Informasi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
	</div>
</div>

@endsection
