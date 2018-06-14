<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('title.task') }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="test-xs-center">{{ trans('title.tasklist') }}</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 push-sm-2">
                {!! Form::open(['url' => 'insert-data', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="card">
                    <div class="card-block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <fieldset class="form-group">
                                    <table>
                                        <tr>
                                            <td>
                                                {!! Form::label('tasks', trans('title.addtask'), ['class' => 'control-label']); !!}
                                                {{ Form::text('name', '', array_merge(['class' => 'form-control'])) }}
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                                {!! Form::submit(trans('title.addtask'), ['class' => 'btn btn-success']); !!}
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('title.current') }}
                        <tbody>
                            @foreach ($tasks as $key =>$value)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $value->name }}</div>
                                    </td>
                                    <td>
                                        {!! Form::open(['url' => "delete/".$value->id , 'method' => 'DELETE']) !!}
                                            {!! Form::token(); !!}
                                            {!! Form::submit(trans('title.delete'), ['class' => 'btn btn-danger']); !!}  
                                        {!! Form::close() !!}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
