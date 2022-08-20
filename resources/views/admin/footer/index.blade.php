@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Footer</h3>
        </div>
    </div>
    <div class="content-body">
        <section class="basic-elements">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Footer Update</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.footer.update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="contact">Contact</label>
                                                <textarea name="contact" class="form-control" rows="3">{{ $footer ? $footer->contact : '' }}</textarea>
                                                @if ($errors->has('contact'))
                                                <small class="text-danger">{{ $errors->first('contact') }}</small>
                                                @endif
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="news">News</label>
                                                <textarea name="news" class="form-control" rows="3">{{ $footer ? $footer->news : '' }}</textarea>
                                                @if ($errors->has('news'))
                                                <small class="text-danger">{{ $errors->first('news') }}</small>
                                                @endif
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="copyright">Copyright</label>
                                                <textarea name="copyright" class="form-control" rows="3">{{ $footer ? $footer->copyright : '' }}</textarea>
                                                @if ($errors->has('copyright'))
                                                <small class="text-danger">{{ $errors->first('copyright') }}</small>
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
