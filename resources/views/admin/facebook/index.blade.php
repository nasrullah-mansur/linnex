@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Facebook</h3>
        </div>
    </div>
    <div class="content-body">
        <section class="basic-elements">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Facebook Info Change</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('facebook.update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="video">Video</label>
                                                <input value="{{ $fb ? $fb->video : '' }}" name="video" type="text" class="form-control" id="video" />
                                                @if ($errors->has('video'))
                                                <small class="text-danger">{{ $errors->first('video') }}</small>
                                                @endif
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="page">Page</label>
                                                <input value="{{ $fb ? $fb->page : '' }}" name="page" type="text" class="form-control" id="page" />
                                                @if ($errors->has('page'))
                                                <small class="text-danger">{{ $errors->first('page') }}</small>
                                                @endif
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
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
