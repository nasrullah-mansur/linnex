@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Appearance</h3>
        </div>
    </div>
    <div class="content-body">
        <section class="basic-elements">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Logo and Favicon Change</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.appearance.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="logo">
                                        <div class="mb-2">
                                            <img id="blah_1" src="{{ asset($app ? $app->logo : 'admin/images/gallery/1.jpg') }}" alt="img" width="300">
                                        </div>
                                        <div class="controls">
                                            <label>Select your image</label>
                                            <input id="imgInp_1" type="file" name="logo" class="form-control" aria-invalid="false">
                                            @if ($errors->has('logo'))
                                                <small class="text-danger">{{ $errors->first('logo') }}</small>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="fav mt-2">
                                        <div class="mb-2">
                                            <img id="blah" src="{{ asset($app ? $app->favicon : 'admin/images/gallery/1.jpg') }}" alt="img" width="300">
                                        </div>
                                        <div class="controls">
                                            <label>Select your image</label>
                                            <input id="imgInp" type="file" name="favicon" class="form-control" aria-invalid="false">
                                            @if ($errors->has('favicon'))
                                                <small class="text-danger">{{ $errors->first('favicon') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1">Save Image</button>
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

@section('custom_js')
<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

    imgInp_1.onchange = evt => {
        const [file] = imgInp_1.files
        if (file) {
            blah_1.src = URL.createObjectURL(file)
        }
    }
</script>
@endsection