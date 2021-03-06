@extends('layouts.app')

@section('content')

@include('commons.rowstart')
    <h1>タスク新規作成ページ</h1>


            {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::select('status',['' => 'Select', 'InProgress' => 'InProgress', 'Pending' => 'Pending', 'Complete' => 'Complete'], null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'タスク内容:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}  
    </div>
@include('commons.rowend')
@endsection