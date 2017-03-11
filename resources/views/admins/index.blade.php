@extends('admins_template')

@section('title','| Dashboard')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>The statistic of the post can be view here.</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		
		<div class="row">
			
			<div class="col-md-7">
				<div class="">
		            <div class="box box-solid">
		                <div class="box-header with-border">
		                  <h3 class="box-title">Latest Post</h3>
		                </div><!-- /.box-header -->
		                <div class="box-body">
		                  <div class="box-group" id="accordion">
		                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
		                    <div class="panel box box-primary">
		                      <div class="box-header with-border">
		                        <a data-toggle="collapse" class="col-md-12" data-parent="#accordion" href="#notice" >
		                        	<h4 class="box-title">Notice</h4>

		                        	<span class="pull-right badge">{{ isset($latest['notice']->created_at) ? $latest['notice']->created_at:''}}</span>
		                        </a>
		                      </div>
		                      <div id="notice" class="panel-collapse collapse in">
		                        <div class="box-body">
		                        	<h4>{{ isset($latest['notice']->title)?$latest['notice']->getTitle():'No post' }}</h4>
		                          	{!! isset($latest['notice']->message)?$latest['notice']->getMessageStrip():'' !!}
		                        </div>
		                      </div>
		                    </div>
		                    <div class="panel box box-danger">
		                      <div class="box-header with-border">
		                        <a data-toggle="collapse" class="col-md-12" data-parent="#accordion" href="#news">
		                        	<h4 class="box-title">News</h4>
		                        	<span class="pull-right badge">{{ isset($latest['news']->created_at)?$latest['news']->created_at:'' }}</span>
		                        </a>
		                      </div>
		                      <div id="news" class="panel-collapse collapse">
		                        <div class="box-body">
		                        	<h4>{{ isset($latest['news']->title)?$latest['news']->getTitle():'No post' }}</h4>
		                          	{!! isset($latest['news']->message)?$latest['news']->getMessageStrip():'' !!}
		                          	@if(isset($latest['news']->image) && $latest['news']->image != "")
		                    			<div>
		          						  <img src="{{ $latest['news']->getImageUrl(Auth::user()->id, true) }}" alt="image" class="margin">
		          						</div>
		          					@endif
		                        </div>
		                      </div>
		                    </div>
		                    <div class="panel box box-success">
		                      <div class="box-header with-border">
		                        <a data-toggle="collapse" class="col-md-12" data-parent="#accordion" href="#file">
		                        	<h4 class="box-title">File</h4>
		                        	<span class="pull-right badge">{{ isset($latest['file']->created_at)?$latest['file']->created_at:'' }}</span>
		                        </a>                        
		                      </div>
		                      <div id="file" class="panel-collapse collapse">
		                        <div class="box-body">
		                        	<h4>{{ isset($latest['file']->title)?$latest['file']->getTitle():'No post' }}</h4>
		                        	@if(isset($latest['file']->file) && $latest['file']->file != "")
		                          		<a href="{{ $latest['file']->getFileLink(Auth::user()->id) }}" target="_block">{{ $latest['file']->getFile() }}</a>
		                          	@endif
		                        </div>
		                      </div>
		                    </div>
		                    <div class="panel box box-info">
		                      <div class="box-header with-border">
		                        <a data-toggle="collapse" class="col-md-12" data-parent="#accordion" href="#resource">
		                        	<h4 class="box-title">Resource</h4>
		                        	<span class="pull-right badge">{{ isset($latest['resource']->created_at) ? $latest['resource']->created_at : '' }}</span>
		                        </a>
		                      </div>
		                      <div id="resource" class="panel-collapse collapse">
		                        <div class="box-body">
		                        	<h4>{{ isset($latest['resource']->title)?$latest['resource']->getTitle():'No post' }}</h4>
		                          	<a href="{{ isset($latest['resource']->url) ? $latest['resource']->url:'#' }}">{{ isset($latest['resource']->url) ? $latest['resource']->getUrl():'' }}</a>
		                        </div>
		                      </div>
		                    </div>
		                  </div>
		                </div><!-- /.box-body -->
		            </div><!-- /.box -->
	            </div>

				
			</div>
			
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12">
		              <div class="box box-solid">
		                <div class="box-header with-border">
		                  <i class="glyphicon glyphicon-saved"></i>
		                  <h3 class="box-title">Whats New!</h3>
		                   <div class="box-tools pull-right">
		                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		                  </div>
		                </div><!-- /.box-header -->
		                <div class="box-body">
		                  <p class="lead"></p>
		                   <ul>
		                   	@foreach($system_update as $value)
		                   		<li><code>{{ $value->getTitle() }}</code></li>
		                   	@endforeach
                    	   </ul>
		                  
		                </div><!-- /.box-body -->
		              </div><!-- /.box -->
		            </div><!-- ./col -->
		        </div>

				<!-- <div class="">
		          <div class="callout callout-info" style="margin-bottom: 5px !important;">
		            <h4><i class="glyphicon glyphicon-user"></i> Android User : 0</h4>
		            <h4><i class="glyphicon glyphicon-apple"></i> Iphone User : 0</h4>
		          </div>
		        </div> -->
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-6 col-xs-6">
						<!-- small box -->
						<a href="{{ route('admin.notice.index') }}">
							<div class="small-box bg-green">
								<div class="inner">
									<h3>{{ $count['notice'] }}</h3>
									<p>Notices</p>
								</div>
								<div class="icon">
									<i class="ion ion-bag"></i>
								</div>
							</div>
						</a>
					</div><!-- ./col -->
					<div class="col-lg-6 col-xs-6">
						<!-- small box -->
						<a href="{{ route('admin.news.index') }}">
							<div class="small-box bg-green">
								<div class="inner">
									<h3>{{ $count['news'] }}</h3>
									<p>News</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
							</div>
						</a>
					</div><!-- ./col -->
					
					<div class="col-lg-6 col-xs-6">
						<!-- small box -->
						<a href="{{ route('admin.resource.index') }}">
							<div class="small-box bg-red">
								<div class="inner">
									<h3>{{ $count['resource'] }}</h3>
									<p>Resources</p>
								</div>
								<div class="icon">
									<i class="ion ion-pie-graph"></i>
								</div>
							</div>
						</a>
					</div><!-- ./col -->

					<div class="col-lg-6 col-xs-6">
						<!-- small box -->
						<a href="{{ route('admin.contact.index') }}">
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>{{ $count['file'] }}</h3>
									<p>File</p>
								</div>
								<div class="icon">
									<i class="ion ion-bag"></i>
								</div>
							</div>
						</a>
					</div><!-- ./col -->
					
					<div class="col-lg-6 col-xs-6">
						<!-- small box -->
						<a href="{{ route('admin.event.index') }}">
							<div class="small-box bg-green">
								<div class="inner">
									<h3>{{ $count['event'] }}</h3>
									<p>Event</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
							</div>
						</a>
					</div><!-- ./col -->
					<div class="col-lg-6 col-xs-6">
						<!-- small box -->
						<a href="{{ route('admin.file.index') }}">
							<div class="small-box bg-yellow">
								<div class="inner">
									<h3>{{ $count['contact'] }}</h3>
									<p>Contact</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-add"></i>
								</div>
							</div>
						</a>
					</div><!-- ./col -->
				</div><!-- /.row -->	
        	</div><!-- /.col -->	
		</div><!-- /.row -->
	
	</section><!-- /.content -->
@endsection


@section('stylesheets')
@endsection

@section('javascripts')
@endsection