@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Phone</h3>
        </div>
    </div>
    <div class="content-body">
        <section class="basic-elements">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Phone Items</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($phones as $phone)
                                    <div class="col-md-3 col-sm-6">
                                        <div class="card" style="background-color: #f1f1f1">
                                            <div class="card-content">
                                              <img class="card-img-top img-fluid" src="{{ asset($phone->image) }}" alt="Card image cap">
                                              <div class="card-body">
                                                <a href="{{ route('admin.phone.edit', $phone->id) }}" class="btn btn-outline-pink">Edit</a>
                                                <a href="{{ route('admin.phone.delete', $phone->id) }}" class="btn btn-outline-pink">Delete</a>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <div class="col-12">No data found</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
  </div>
@endsection