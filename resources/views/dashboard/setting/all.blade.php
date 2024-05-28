@extends('dashboard.layout.app')
@section('title' , 'Setting')
@section('content')
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header align-items-top">
                    <div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Welcome Back!</h2>
						<p>Questions about onboarding lead data? <a href="#">Learn more.</a></p>
					</div>
				</div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
								<div class="col">
<div class="card ">
									<div class="card-body pa-0">
                                    <a  href="{{route('dashboard.setting.create')}}" class="btn btn-info"  >add setting</a>
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-hover mb-0">
													<thead>
														<tr>
															<th>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck4">
																	<label class="custom-control-label" for="customCheck4">#</label>
																</div>
															</th>
															<th>logo</th>
															<th>favico</th>
															<th>phone</th>
															<th>facebook</th>
															<th>linkedin</th>
															<th>Option</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															@foreach($data as $setting)
															<td>{{$loop->index+1}}</td>
															@foreach($setting->media as $img)
															  <img src="{{ $imgs->getUrl() }}" width="75" height="75" alt="">
															@endforeach	
															<td>{{$setting->facebook}}</td>
															<td>{{$setting->linkedin}}</td>
															<td>
															<a> edit </a>
															<button class="btn btn-info" >Delete<button>
															</td>
															@endforeach	

														</tr>
															
															
															
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>

@endsection                              