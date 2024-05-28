@extends('dashboard.layout.app')
@section('title' , 'add setting')
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
								<div class="col-lg-12">
                                <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Form with icon</h5>
                            <p class="mb-25">Place an icon inside add-on on either side of an input. You may also place one on right side of an input.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">logo</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-append">
														<span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                <input type="hidden"><input type="file" name="logo">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>
                                            @error('logo')
                                            <span class="text text-danger"> {{$message}} </span>
                                            @enderror


                                            <div class="fileinput fileinput-new input-group mt-2" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">favicon</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-append">
														<span class="btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                <input type="hidden"><input  type="file" name="favicon">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>
                                            @error('favicon')
                                            <span class="text text-danger"> {{$message}} </span>
                                            @enderror







                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">facebook</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-facebook"></i></span>
                                                </div>
                                                <input type="text" name="facebook" class="form-control" id="exampleInputuname_1" placeholder="facebook">
                                            </div>
                                        </div>
                                        @error('facebook')
                                            <span class="text text-danger"> {{$message}} </span>
                                        @enderror

                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">linkedin</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-linkedin"></i></span>
                                                </div>
                                                <input type="text" name="linkedin" class="form-control" id="exampleInputuname_1" placeholder="linkedin">
                                            </div>
                                        </div>
                                        @error('linkedin')
                                            <span class="text text-danger"> {{$message}} </span>
                                        @enderror

                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">phone</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-phone"></i></span>
                                                </div>
                                                <input type="text" name="phone" class="form-control" id="exampleInputuname_1" placeholder="phone">
                                            </div>
                                        </div>
                                        @error('email')
                                            <span class="text text-danger"> {{$message}} </span>
                                        @enderror



                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                                </div>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail_1" placeholder="Enter email">
                                            </div>
                                        </div>
                                        @error('email')
                                            <span class="text text-danger"> {{$message}} </span>
                                        @enderror


                                        <div class="card hk-dash-type-1 overflow-hide">
							<div class="card-header pa-0">
								<div class="nav nav-tabs nav-light nav-justified" id="dash-tab" role="tablist">
                                 @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
									<a class="d-flex align-items-center justify-content-center nav-item nav-link {{$loop->index == 0 ? 'active' : ''}}" id="dash-tab-{{ $localeCode }}" data-toggle="tab" href="#nav-dash-{{$localeCode}}" role="tab" aria-selected="true">
										<div class="d-flex">
											<div>
												<span class="d-block mb-5"><span class="display-4 ">{{$properties['native']}}</span></span>
											</div>
										</div>
									</a>
                                    @endforeach


								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="nav-tabContent">
                                 @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

									<div class="tab-pane fade {{$loop->index == 0 ? 'active show' : ''}} " id="nav-dash-{{$localeCode}}" role="tabpanel" aria-labelledby="dash-tab-1">
										<div id="e_chart_{{$localeCode}}" class="echart" style="height: 310px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1715025060294">
                                           <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Title {{$localeCode}}  </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                                </div>
                                                <input type="text" name="{{$localeCode}}[title]"  class="form-control" id="exampleInputEmail_{{$localeCode}}" placeholder="Title {{$localeCode}}">
                                            </div>
                                        </div>
                                        @error("{{$localeCode}}[title]")
                                            <span class="text text-danger"> {{$message}} </span>
                                        @enderror

                                           <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_{{$localeCode}}">Content {{$localeCode}}</label>
                                            <div class="input-group">

                                                <textarea name="{{$localeCode}}[content]" class="form-control mt-15" row="3" placeholder="content {{$localeCode}}">

                                              </textarea>
                                            </div>
                                        </div>
                                        @error("{{$localeCode}}[content]")
                                            <span class="text text-danger"> {{$message}} </span>
                                        @enderror



                                        </div>
									</div>

                                    @endforeach



								</div>
							</div>
						</div>











                                        <button type="submit" class="btn btn-primary mr-10">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </section>


									</div>
								</div>
							</div>
						</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->








@endsection