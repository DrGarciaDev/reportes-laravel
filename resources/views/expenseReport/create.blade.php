@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Report</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense-reports">Back to Expense Reports</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <form action="/expense-reports" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@stop