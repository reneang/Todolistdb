@extends('app')

@section('title', 'pagetitle')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do List</title>
</head>

<body>
  <div class="col-xs-12 col-md-offset-2 col-md-8">
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
              aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="#">Task List</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">New Task</a></li>
                  <li><a href="#">Current Task</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <div class="panel panel-default">
      <div class="panel-heading">New Task</div>
      <div class="panel-body">
      <form action="/addtodo" method="POST">
        {{ csrf_field() }} 
        {{--  harus ada untuk method post, untuk meng - generate tokken   --}}
        <div class="form-group">
          <label> Task</label> <br>
          <input type="text" name="mytodo" class="form-control" [(ngModel)]="ToDo">
          <button type="submit" class="btn btn-default" (click)="AddToDo()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Task</button>
        </form>
        {{--  when submit initialized, the data submitted will be contained by it's form name, diproses daalam function routenya 
        Input akan jadi value --}}
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Current Task</h3>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-bordered">
          <tr>
            <th><label>To Do</label></th>
            <th></th>
            <th></th>
          </tr>
          @foreach($data as $d)
          {{--  @if($d->deleted == false)  --}}
        <tr>
          <td> {{$d -> description }} </td>
            {{--  <td>{{ $d->todo }}</td>  --}}
            <td>
              <!-- <input type="checkbox" value="" (change)="CompleteToDo($event, t.id)"> -->
              <input type="checkbox" value="" (change)="CompleteToDo()">
            </td>
            <td>
              <button type="button" class="btn btn-danger" (click)="DeleteToDo()"> <span class="glyphicon glyphicon-trash"></span> Delete </button>
              <!-- <button type="button" class="btn btn-danger" (click)="DeleteToDo(t.id)"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete </button> -->
            </td>
        </tr>
            {{--  @endif  --}}
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>

</html>
@endsection