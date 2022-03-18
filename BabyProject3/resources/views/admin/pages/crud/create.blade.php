@extends('admin.index')

@section('content')
<div class="row layout-top-spacing">
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Create {{ucwords($model)}}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form method="POST" action="{{route('admin.'.$model.'.store')}}">
                    @csrf



                    @foreach ($columns as $key => $name)

                    @if ($key == 'text')
                    <x-input-text name="{{$name}}" />

                    @elseif ($key == 'textArea')
                    <x-input-text-area name="{{$name}}" />

                    @endif

                    @endforeach




                    <input type="submit" class="mt-4 mb-4 btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection