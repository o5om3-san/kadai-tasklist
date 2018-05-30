@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} タスク編集ページ</h1>

    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'ステータス:') !!}
        {!! Form::select('status',['' => 'Select', 'InProgress' => 'InProgress', 'Pending' => 'Pending', 'Complete' => 'Complete'])!!}

        {!! Form::label('content', 'タスク内容:') !!}
        {!! Form::text('content') !!}


        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection