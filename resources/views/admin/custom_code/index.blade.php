@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Theme Controller</h3>
      </div>
  </div>
  <div class="content-body">
      <section class="basic-elements">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Theme Controller</h4>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              <form action="{{ route('admin.custom.code.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="css">CSS</label>
                                            <textarea name="css" class="form-control" rows="10">{{ $code ? $code->js : '' }}</textarea>
                                            @if ($errors->has('css'))
                                            <small class="text-danger">{{ $errors->first('css') }}</small>
                                            @endif
                                        </fieldset>
                                    </div>

                                    <div class="col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="js">Javascript</label>
                                            
                                            <textarea name="js" class="form-control" rows="10">{{ $code ? $code->js : '' }}</textarea>
                                            @if ($errors->has('js'))
                                            <small class="text-danger">{{ $errors->first('js') }}</small>
                                            @endif
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