@extends('admin.index')

@section('content')

    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Faq</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form method="post" action="{{route('admin.faq.update')}}">
                    @csrf
                    @method('put')

                    <div class="form-group mb-4">
                        <label for="question">Question</label>
                        <input name="question" type="text" class="form-control" id="question">
                        @error('question')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="answer">Answer</label>
                        <textarea name="answer" class="form-control" id="answer" rows="3"></textarea>
                        @error('answer')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                </form>
            </div>
        </div>
    </div>

@endsection
