@extends('home')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     <h2>Создание задачи</h2>
    <form action="{{route('project.create')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Название проекта</label>
            <div class="col-sm-10">
                <select class="form-control" name="type" id="status">
                    <option>Комлексная програма Мик</option>
                    <option>Курс для Клиент менеджеров mmb</option>
                    <option>Новая комплексная программа Премьер</option>
                    <option>ЕРКЦ</option>
                    <option>Тренажёры</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Ссылка на задачу из redmine</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="href" id="inputPassword3" placeholder="https://redmine/issues">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Где проверяется курс</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="platform" id="gridRadios1" value="dev" checked>
                        <label class="form-check-label" for="gridRadios1">
                            sbsdev.ru
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="platform" id="gridRadios2" value="ci">
                        <label class="form-check-label" for="gridRadios2">
                            rb.ci01
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="platform" id="gridRadios3" value="prod">
                        <label class="form-check-label" for="gridRadios3">
                            rb.prod
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-10">

                <button type="submit" class="btn btn-success">Создать задачу</button>
            </div>
        </div>
    </form>
        </div>
        </nav>
    </div>
        </div>
    </main>

    @endsection()
