@extends('layouts.master')
<!-- header -->
@section('title', 'services')
<!-- //banner -->
@section('content')
<!-- services -->
	<div class="services">
		<div class="container">
			<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">店家列表</li>
			</ol>
				<form action="{{route('stosearch')}}" method="get" class="form-inline">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="請輸入關鍵字">
					</div>

					<div class="form-group">
						<button class="btn btn-success" type="submit">搜尋</button>
					</div>
				</form>
			<div class="services-overview">
				<h3>店家列表</h3>
				<div class="services-overview-grids">
					@if(count($store) == 0)
						<p class="text-center">
							無店家
						</p>
					@endif
					@foreach($store as $store)
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="{{env('BACKEND_URL2') . $store->picture}}" alt=" " class="img-responsive" />

							<div class="services-overview-gd">
								<h4>名稱：{{$store->name}}</h4>
								<a href="{{route('stodetail',$store->id)}}" class="btn btn-success">觀看店家商品頁面</a>
							</div>
						</div>
					</div>
						@endforeach


					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //services -->
<!--footer-->

<!--//footer-->
@endsection
