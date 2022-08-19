@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Main Menu Edit</h3>
      </div>
  </div>
  <div class="content-body">
      <section class="basic-elements">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Main Menu Edit</h4>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              <form action="{{ route('admin.mainMenu.update') }}" method="POST">
                                @csrf

                                <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Label</th>
                                          <th>Link</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @php
                                            $items = false;
                                            if($menu) {
                                                $items = true;
                                                $labels = explode(',', $menu->items);
                                                $links = explode(',', $menu->links);
                                            }
                                        @endphp
                                        <tr>
                                          <td>
                                            <span>01</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($labels[0]) ? $labels[0] : '' }}" name="items[]" type="text" class="form-control" />
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
                                                <input value="{{ isset($labels[1]) ? $labels[1] : '' }}" name="items[]" type="text" class="form-control" />
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
                                                <input value="{{ isset($labels[2]) ? $labels[2] : '' }}" name="items[]" type="text" class="form-control" />
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
                                                <input value="{{ isset($labels[3]) ? $labels[3] : '' }}" name="items[]" type="text" class="form-control" />
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
                                                <input value="{{ isset($labels[4]) ? $labels[4] : '' }}" name="items[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[4]) ? $links[4] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>06</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($labels[5]) ? $labels[5] : '' }}" name="items[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[5]) ? $links[5] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>07</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($labels[6]) ? $labels[6] : '' }}" name="items[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[6]) ? $links[6] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>08</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($labels[7]) ? $labels[7] : '' }}" name="items[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[7]) ? $links[7] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>09</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($labels[8]) ? $labels[8] : '' }}" name="items[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[8]) ? $links[8] : '' }}" name="links[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span>10</span>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($labels[9]) ? $labels[9] : '' }}" name="items[]" type="text" class="form-control" />
                                            </fieldset>
                                          </td>
                                          <td>
                                            <fieldset class="form-group">
                                                <input value="{{ isset($links[9]) ? $links[9] : '' }}" name="links[]" type="text" class="form-control" />
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