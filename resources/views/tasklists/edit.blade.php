@extends('layouts.app')

@section('content')

@include('commons.rowstart')
        <h1>id: {{ $tasklist->id }} タスク編集ページ</h1>
            {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::select('status',['' => 'Select', 'InProgress' => 'InProgress', 'Pending' => 'Pending', 'Complete' => 'Complete'], null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク内容:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
@include('commons.rowend')
@endsection

