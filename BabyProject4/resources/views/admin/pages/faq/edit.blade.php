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


                    <x-input-text name="question" :old="$oldData->question" />

                    <x-input-text-area name="answer" :old="$oldData->answer" />




                    <input type="submit" class="mt-4 mb-4 btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection