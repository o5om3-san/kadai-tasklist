@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>


    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        {!! Form::label('title', 'ステータス:') !!}
        {!! Form::select('status',['' => 'Select', 'InProgress' => 'InProgress', 'Pending' => 'Pending', 'Complete' => 'Complete'])!!}

        {!! Form::label('content', 'タスク内容:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection