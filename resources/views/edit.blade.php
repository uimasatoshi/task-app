{!! Form::model($task, ['route' => ['index.update', $task->id], 'method' => 'post']) !!}
   <div class="form-group point">
     {!! Form::label('title', 'タイトル') !!} 
     {!! Form::text('title', old('title'), ['class' => 'form-control']) !!} 
   </div>
   <div class="form-group">
     {!! Form::label('name', 'デート内容') !!} 
     {!! Form::textarea('name', old('name'), ['class' => 'form-control']) !!} 
   </div>
   {!! Form::submit('Post', ['class' => 'confirm-update']) !!} 
{!! Form::close() !!} 
