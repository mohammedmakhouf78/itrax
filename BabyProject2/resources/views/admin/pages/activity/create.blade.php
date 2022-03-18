@extends('admin.index')

@section('content')
<div class="row layout-top-spacing">
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Create Activity</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form method="post" action="{{route('admin.activity.create')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-4">
                        <label for="title">title</label>
                        <input name="title" type="text" class="form-control" id="title">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="slug">slug</label>
                        <textarea name="slug" class="form-control" id="slug" rows="3"></textarea>
                        @error('slug')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-4 mt-3">
                        <label for="icon">Choose an icon</label>
                        <input name="icon" type="file" class="form-control-file" id="icon">
                        @error('icon')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <input type="submit" class="mt-4 mb-4 btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection