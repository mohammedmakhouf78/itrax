@extends('admin.index')

@section('content')
<div class="row layout-top-spacing">
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Update {{ucwords($model)}}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form method="post" action="{{route('admin.'.$model.'.update',$oldData->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <x-input-text name="title" :old="$oldData->title" />

                    <x-input-text-area name="slug" :old="$oldData->slug" />

                    <p>the old one</p>
                    <img class="mb-5" style="width: 200px;" src="{{asset($oldData->icon)}}" alt="">
                    <x-input-file name="icon" />

                    <input type="submit" class="mt-4 mb-4 btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection