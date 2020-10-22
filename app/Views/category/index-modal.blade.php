@extends('layouts.backend')

@section('backend')
	<ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="#">Trang chủ</a>
	        </li>
	        <li class="breadcrumb-item active">Danh mục</li>
	      </ol>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
	 Thêm mới
	</button>

	<!-- Modal Insert -->
	<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="myModalLabel">Thông tin danh mục</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      </div>
	      <form action="{{route('backend.category-add')}}" method="POST">
	      	{{csrf_field()}}
	      	<div class="modal-body">
	        	<div class="form-group">
	        		<label for="" style="font-weight: bold;">Tên danh mục</label>
	        		<input type="text" class="form-control" name="name" id="name" placeholder="Mời bạn nhập tên">
	        	</div>
				<div class="form-group">
	        		<label for="" style="font-weight: bold;">Danh mục cha</label>
	        		<select name="parent" id="parent" class="form-control">
	        			<option value="">Chọn list</option>
	        			<option value="0">Một</option>
	        			<option value="1">Hai</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label for="" style="font-weight: bold;">Trang thái</label>
	        		<select name="status" id="status" class="form-control">
	        			<option value="">Trạng thái</option>
	        			<option value="0">Ẩn</option>
	        			<option value="1">Hiện</option>
	        		</select>
	        	</div>
		    </div>
		    <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		    <div class="modal-footer">
		      <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
		      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Đóng</button>
		    </div>
	      </form>
	    </div>
	  </div>
	</div>


	<!-- Modal Edit id vs name-->
	<div class="modal fade bs-example-modal-lg" id="myEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title text-center" id="myModalLabel">Sửa danh mục</h4>
	      </div>
	      <form action="{{route('backend.category-update',['id=>$cat->id'])}}" method="POST">
	      	{{method_field('patch')}};
	      	{{csrf_field()}}
	      	<div class="modal-body">
	      		<input type="hidden" name="cat_id" id="cat_id" >
	        	<div class="form-group">
	        		<label for="" style="font-weight: bold;">Tên danh mục</label>
	        		<input type="text" class="form-control" name="name" id="name" placeholder="Mời bạn nhập tên">
	        	</div>
				<div class="form-group">
	        		<label for="" style="font-weight: bold;">Danh mục cha</label>
	        		<select name="parent" id="parent" class="form-control">
	        			<option value="">Chọn list</option>
	        			<option value="0">Một</option>
	        			<option value="1">Hai</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label for="" style="font-weight: bold;">Trang thái</label>
	        		<select name="status" id="status" class="form-control">
	        			<option value="">Trạng thái</option>
	        			<option value="0">Ẩn</option>
	        			<option value="1">Hiện</option>
	        		</select>
	        	</div>
		    </div>
		    <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		    <div class="modal-footer">
		      <button type="submit" class="btn btn-primary btn-sm">Lưu lại</button>
		      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Đóng</button>
		    </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- Show -->
	<div class="panel panel-primary">
		<div class="panel-heading">
			<!-- <h3 class="panel-title">Danh sách danh mục</h3> -->
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered text-center" style="margin-top: 20px;">
				<thead>
					<tr>
						<th>Tên danh mục</th>
						<th>Danh mục cha</th>
						<th>Trạng thái</th>
						<th>Chức năng</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cats as $c)
					<tr>
						<td>{!!$c->name!!}</td>
						<td>{!!$c->parent!!}</td>
						<td>
							@if($c->status==1)
								Hiển thị
							@else
								Không hiển thị
							@endif
						</td>
						<td>
							<button class="btn btn-success btn-sm" data-catid="{!!$c->id!!}" data-name="{!!$c->name!!}" data-parent="{!!$c->parent!!}" data-status="{!!$c->status!!}" data-toggle="modal" data-target="#myEdit">Sửa</button>
							<button title="" class="btn btn-danger btn-sm">Xóa</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!!$cats->links()!!}
		</div>
	</div>
	   
@stop()