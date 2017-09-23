@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', [
            '未対応' => '未対応',
            '対応中' => '対応中',
            '対応済' => '対応済'],
            '未対応') !!}  
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('追加') !!}

    {!! Form::close() !!}

@endsection