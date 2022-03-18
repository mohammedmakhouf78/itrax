@extends('admin.index')

@section('content')

<div class="page-header d-flex align-items-center">
    <div class="page-title">
        <h3>{{ucwords($model)}}</h3>
    </div>
    <a href="{{route('admin.'.$model.'.create')}}" class="btn btn-primary ml-auto">Create</a>
</div>

<div class="row" id="cancel-row">

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>question</th>
                            <th>answer</th>
                            <th class="no-content"></th>
                            <th class="no-content"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all as $index => $item)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$item->question}}</td>
                            <td>{{$item->answer}}</td>

                            <td>
                                <a class="btn btn-success" href="{{route('admin.'.$model.'.edit',$item->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                            </td>


                            <td>
                                <form method="POST" action="{{route('admin.'.$model.'.destroy',$item->id)}}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x-circle">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>question</th>
                            <th>answer</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection