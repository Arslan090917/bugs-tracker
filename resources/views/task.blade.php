<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Bug tracker</title>
</head>
<body>
<div>
<div class="container-fluid">
    <nav class="navbar navbard-default">

    </nav>

    <div class="card-body">
        @include('errors')
        <form action="{{route('task.create')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row">
                <div class="form-group">
                    <label for="Task" class="col-lg-8 control-lable">Задача</label>

                    <div class="row">
                        <div class="col">
                            <input type="file" name="img" id="exampleFormControlFile1">
                        </div>
                        {{--<div class="col-mb-3">
                            <input type="file" name="file">
                        </div>--}}
                        <div class="col">
                            <input type="text" name="ids" id="task-ids" class="form-control" placeholder="id хэш">
                        </div>
                        <div class="col">
                            <input type="text" name="name" id="task-name" class="form-control" placeholder="Описание бага">
                        </div>
                        <div>
                            <div class="col">
                                <input type="file" name="img2" id="exampleFormControlFile2">
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-control" name="type" id="status">
                                <option>Механика</option>
                                <option>Вёртка</option>
                                <option>Магия</option>
                                <option>Статистика</option>
                            </select>
                        </div>
                        <input type="hidden" name="project_id" value="{{request()->route('id')}}">
                        <div class="col">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>Добавить задачу</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    @if(count($task) > 0)
        <div class="card">
            <div class="card-heading"><h3>Список задач:</h3></div>
            <div class="table-responsive-sm">
                <table class="table table-stripe task-table table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Скриншот</th>
                        <th scope="col">id</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Как должно быть</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Кнопочки </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($task as $tasks)
                        <tr class="table-bordered">
                            <td>{{$tasks->id}}</td>
                            <td><img class="img" style="width: 400px; height: 400px" src="{{asset('storage/'. $tasks->imgHref)}}" alt="{{asset('storage/app/public/'.$tasks->imgHref)}}"></td>
                            <td>{{$tasks->hash}}</td>
                            <td>{{$tasks->name}}</td>
                            <td><img class="img" style="width: 400px; height: 400px" src="{{asset('storage/'. $tasks->example)}}" alt="{{asset('storage/app/public/'.$tasks->example)}}"></td>
                            <td>{{$tasks->type}}</td>
                            <td>
                                <form action="{{url('task/'.$tasks->id)}}" method="POST">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button class="btn btn-danger" type="submit">УДАЛИТЬ</button>
                                </form>
                                <form action="{{url('task/'.$tasks->id)}}" method="POST">
                                    {{method_field('PUT')}}
                                    {{csrf_field()}}
                                    <button class="btn btn-success" type="submit" style="margin-top: 20px">Изменить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endif
</div>
</div>
</div>
</div>
</body>
</html>
