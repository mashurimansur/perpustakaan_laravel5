@extends('admin.layouts.main')

@section('title', 'Tambah Buku')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.html"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>Tambah Member</strong>
		</li>
	</ol>	<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Tambah Member
				</div>
			</div>
			
			<div class="panel-body">
				
				<form action="{{ route('member_update', ['id'=>$member->id]) }}" method="post" role="form" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Nama</label>
						
						<div class="col-sm-5">
							<input type="text" name="name" value="{{ $member->name }}" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Email</label>
						
						<div class="col-sm-5">
							<input type="text" name="email" value="{{ $member->email }}" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Status</label>
						
						<div class="col-sm-5">
							<select name="status" class="form-control">
								<?php
									$status = ['User', 'Admin', 'Pimpinan'];
									for ($i=0; $i < count($status); $i++) {
								?>
								<option value="{{ $status[$i] }}" {{ $status[$i] == $member->status ? 'selected' : '' }}>{{ $status[$i] }}</option>
								<?php
									}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Password</label>
						
						<div class="col-sm-5">
							<input type="password" name="password" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Gambar</label>
						
						<div class="col-sm-5">
							<input type="file" name="image" class="form-control" id="field-file">
						</div>
					</div>
					
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<br />
@endsection