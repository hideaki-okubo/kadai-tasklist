@extends("layouts.app")

@section("content")

 <h1>id = {{ $task->id }} タスクの詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    
    <div>
        @if (Auth::id() == $task->user_id)
            {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
        @endif
    </div>
    {!! Form::close() !!}

@endsection