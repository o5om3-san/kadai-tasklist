@extends('layouts.app')

@section('content')

    <h1>新規タスク作成ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection