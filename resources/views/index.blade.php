<p>フォーム</p>
@if (count($errors) > 0)
  <p>{{ $errors->first('title') }}</p>
  <p>{{ $errors->first('name') }}</p>
@endif


            {!! Form::open(['route' => 'index.post', 'method' => 'post']) !!}
            <div class="form-box">
                {!! Form::label('title', 'title') !!}
                {!! Form::text('title', old('title')) !!}
            </div>
            <div class="form-box">
                {!! Form::label('name', 'Todo名') !!}
                {!! Form::text('name', old('name')) !!}
            </div>
            <div class="form-box submit-wrap">
                {!! Form::submit('登録する') !!}
            </div>
            {!! Form::close() !!}



@foreach($tasks as $task)
<p><a href="/edit/{{ $task->id }}">{{ $task->title }}</a></p>
<p><a href="/edit/{{ $task->id }}">{{ $task->name }}</a></p>
@endforeach

