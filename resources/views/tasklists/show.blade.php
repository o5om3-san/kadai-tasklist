@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} の詳細ページ</h1>

    <p>ステータス: {{ $tasklist->status }}</p>
    <p>タスク内容: {{ $tasklist->content }}</p>

    {!! link_to_route('tasklists.edit', '編集', ['id' => $tasklist->id]) !!}

    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection