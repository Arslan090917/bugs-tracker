@extends('home')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h4 class="border-bottom border-gray pb-2 mb-0">Мои формуляры</h4>
    @foreach($projects as $value)
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <a href="{{url('/task/'. $value->id)}}"><strong class="d-block text-gray-dark">{{$value->project}}</strong></a>
                Ссылка на задачу в Redmine: {{$value->href}}<br>
                Дата: {{$value->created_at}}

                <small class="d-block text-right mt-1">
                    <a href="{{url('/task/'. $value->id)}}">Открыть правку</a>
                </small>
            </p>

        </div>



    @endforeach
        <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h4 class="border-bottom border-gray pb-2 mb-0" style="padding-top: 10px">Все формуляр</h4>
        @foreach($project2 as $val)
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <a href="{{url('/task/'. $val->id)}}"><strong class="d-block text-gray-dark">{{$val->project}}</strong></a>
                    Ссылка на задачу в Redmine: {{$val->href}}<br>
                    Дата: {{$val->created_at}}
                    <small class="d-block text-right mt-1">
                        <a href="{{url('/task/'. $val->id)}}">Открыть правку</a>
                    </small>
                </p>

            </div>
            @endforeach
        </div>

    </div>
    </main>
    @endsection

