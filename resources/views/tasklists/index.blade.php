@extends('layouts.app')

@section('content')

@include('commons.rowstart')

    <h1>タスク</h1>
       @if (count($tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklists as $tasklist)
                    <tr>
                        <td>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
                        <td>{{ $tasklist->status }}</td>
                        <td>{{ $tasklist->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        @endif
        
            {!! link_to_route('tasklists.create', ' 新規タスクの投稿', null, ['class' => 'btn btn-primary glyphicon glyphicon-comment'] ) !!}
@include('commons.rowend')

@endsection