@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Top Header Edit</h3>
      </div>
  </div>
  <div class="content-body">
      <section class="basic-elements">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Top Header Edit</h4>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              <form action="{{ route('admin.top.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="email">Email</label>
                                            <input value="{{ $top ? $top->email : '' }}" name="email" type="text" class="form-control" id="email" />
                                            @if ($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="Service">Services Point</label>
                                            <input value="{{ $top ? $top->service : '' }}" name="service" type="text" class="form-control" id="Service" />
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="service_link">Services Point Link</label>
                                            <input value="{{ $top ? $top->service_link : '' }}" name="service_link" type="text" class="form-control" id="service_link" />
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="phone">Phone</label>
                                            <input value="{{ $top ? $top->phone : '' }}" name="phone" type="text" class="form-control" id="phone" />
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="contact">Contact</label>
                                            <input value="{{ $top ? $top->contact : '' }}" name="contact" type="text" class="form-control" id="contact" />
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="contact_link">Contact Link</label>
                                            <input value="{{ $top ? $top->contact_link : '' }}" name="contact_link" type="text" class="form-control" id="contact_link" />
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-1">
                                      <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1">Save Change</button>
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