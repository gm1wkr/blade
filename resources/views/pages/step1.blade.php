@extends('layouts.default')
@section('content')

<form class="h-10" method="POST" action="/step-1">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h2>Your Details</h2>
    <p>Please enter your details below. </p>

    <div class="form-group">
        <label for="basic-url">Student ID</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Student ID">
            <span class="input-group-btn">
              <button
                class="btn btn-default"
                type="button"
                data-toggle="popover"
                title="Student ID"
                data-content="Your eight digit Student ID begins with 50."
                >
                    ?
              </button>
            </span>
          </div>
    </div>

    <div class="form-group">
        <label for="basic-url">Type of Student</label>
        <select class="form-control" name="" id="">
            @foreach ($student_level as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="basic-url">Date of Birth</label>
        <input type="date" class="form-control" placeholder="Student ID">
    </div>

    <div class="form-group">
        <label for="basic-url">Email</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Email Address">
            <span class="input-group-btn">
            <button
                class="btn btn-default"
                type="button"
                data-toggle="popover"
                title="Email Address"
                data-content="The Email address you used when registering with the University."
            >
                ?
            </button>
              </span>
          </div>
    </div>

      <div class="controls">
            <a
                href="/"
                type="button" 
                class="btn btn-default" 
                data-toggle="tooltip" 
                data-placement="auto" 
                title="Tooltip on right"
            >
                Previous
            </a>
            <a href="/step2" type="button" class="btn btn-primary">
                Next Step
            </a>
      </div>
</form>
@stop
