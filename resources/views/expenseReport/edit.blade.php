@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Edit Report {{ $report->id }}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense-reports">Back to Expense Reports</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <form action="/expense-reports/{{ $report->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{ $report->title }}">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@stop