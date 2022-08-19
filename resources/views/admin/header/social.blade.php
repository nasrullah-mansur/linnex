@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Social Media Edit</h3>
      </div>
  </div>
  <div class="content-body">
      <section class="basic-elements">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Social Media Edit</h4>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              <form action="{{ route('admin.social.update') }}" method="POST">
                                @csrf

                                <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Class Name</th>
                                          <th>Icon Name</th>
                                          <th>Link</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @php
                                            $items = false;
                                            if($social) {
                                                $items = true;
                                                $classNames = explode(',', $social->class_name);
                                                $iconNames = explode(',', $social->icon_name);
                                                $links = explode(',', $social->links);
                                            }
                                        @endphp
                                        <tr>
                                          <td>
                                            <span>01</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($classNames[0]) ? $classNames[0] : '' }}" name="class_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($iconNames[0]) ? $iconNames[0] : '' }}" name="icon_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[0]) ? $links[0] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>02</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($classNames[1]) ? $classNames[1] : '' }}" name="class_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($iconNames[1]) ? $iconNames[1] : '' }}" name="icon_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[1]) ? $links[1] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>03</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($classNames[2]) ? $classNames[2] : '' }}" name="class_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($iconNames[2]) ? $iconNames[2] : '' }}" name="icon_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[2]) ? $links[2] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>04</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($classNames[3]) ? $classNames[3] : '' }}" name="class_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($iconNames[3]) ? $iconNames[3] : '' }}" name="icon_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[3]) ? $links[3] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>05</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($classNames[4]) ? $classNames[4] : '' }}" name="class_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($iconNames[4]) ? $iconNames[4] : '' }}" name="icon_name[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[4]) ? $links[4] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                       
                                      </tbody>
                                    </table>
                                  </div>

                                <div>
                                    <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1">Save Change</button>
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