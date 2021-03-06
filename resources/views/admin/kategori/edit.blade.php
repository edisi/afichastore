@extends('layouts.template') 

@section('judul', 'Kategori') 

@section('bread')
<li>
  <a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a>
</li>
<li class="active">Kategori</li>
@endsection 

@section('main')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
			    <div class="box-header with-border">
			    	<div class="pull-right hidden-xs">
				      <a href="{{url('admin/kategori')}}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
				    </div>
			      	<h3 class="box-title">Edit Kategori</h3>
			    </div>

			    <form role="form" action="{{ url('admin/kategori/'.$kategori->id) }}" method="post" enctype="multipart/form-data">
	              <div class="box-body">
	              	<div class="row">
	              		<div class="col-md-12">
	              			@include('pesan/error')
	              		</div>
						<div class="col-md-8">
			                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
			                  <label for="nama">Nama</label>
			                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama kategori" value="@if(count($errors) > 0){{old('nama')}}@else{{$kategori->nama}}@endif" required="">
			                  @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <i class="fa fa-times-circle-o"></i> <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
			                </div>
			                <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
			                  	<label for="link">Link</label>
			                  	<input type="link" class="form-control" id="link" name="link" placeholder="Link kategori" value="@if(count($errors) > 0){{old('link')}}@else{{$kategori->link}}@endif" required="">
			                 	@if ($errors->has('link'))
	                                <span class="help-block">
	                                    <i class="fa fa-times-circle-o"></i> <strong>{{ $errors->first('link') }}</strong>
	                                </span>
                                @endif
			                </div>
			            </div>
						<div class="col-md-4">
			            </div>
			        </div>
	                
	              </div>

	              <div class="box-footer">
	              	{{ csrf_field() }}
	              	<input type="hidden" name="_method" value="PUT">
	                <button type="submit" name="simpan" class="btn btn-primary pull-right">Simpan</button>
	              </div>
	            </form>
			   
			</div>
		</div>
	</div>
</section>
@endsection