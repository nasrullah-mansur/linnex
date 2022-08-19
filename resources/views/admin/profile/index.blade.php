@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Edit Profile</h3>
      </div>
  </div>
  <div class="content-body">
      <section class="basic-elements">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Edit Profile</h4>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                            <h2>Change Your Profile</h2>
                              <form action="{{ route('admin.profile.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="name">Name</label>
                                            <input value="{{ Auth::user()->name }}" name="name" type="text" class="form-control" id="name" />
                                            @if ($errors->has('name'))
                                            <small class="text-danger">{{ $errors->first('name') }}</small>
                                            @endif
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="email">Email</label>
                                            <input value="{{ Auth::user()->email }}" name="email" type="text" class="form-control" id="email" />
                                            @if ($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                        </fieldset>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 mb-1">
                                      <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1">Save Profile</button>
                                    </div>
                                    
                                </div>
                              </form>


                            <h2>Change Your Password</h2>
                              <form action="{{ route('admin.password.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="password">Password</label>
                                            <input name="password" type="text" class="form-control" id="password" />
                                            @if ($errors->has('password'))
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="con_password">Confirm Password</label>
                                            <input  name="con_password" type="text" class="form-control" id="con_password" />
                                            @if ($errors->has('con_password'))
                                            <small class="text-danger">{{ $errors->first('con_password') }}</small>
                                            @endif
                                        </fieldset>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 mb-1">
                                      <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1">Save Password</button>
                                    </div>
                                    
                                </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      
  </div>
</div>

@endsection