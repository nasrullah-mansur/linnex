@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Slider</h3>
        </div>
    </div>
    <div class="content-body">
        <section class="basic-elements">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Slider Item Create</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div id="output" class="mb-2" style="display: none">
                                        <img id="blah" src="{{ asset('admin/images/gallery/1.jpg') }}" alt="img" width="300">
                                    </div>
                                    <div class="controls">
                                        <label>Select your image</label>
                                        <input id="imgInp" type="file" name="image" class="form-control" required="" aria-invalid="false">
                                        @if ($errors->has('image'))
                                            <small class="text-danger">{{ $errors->first('image') }}</small>
                                        @endif
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
            $('#output').show();
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
@endsection