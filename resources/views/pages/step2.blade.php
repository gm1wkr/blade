@extends('layouts.default')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8  col-sm-offset-2">
            <div class="app-alert alert alert-danger alert-block" role="alert">
                <h4><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Error</h4>
                There has been a problem with your submission. Inline errors are highlighted below.
            </div>
        </div>
    </div>
</div>

<form class="h-10" method="POST" action="/step-1">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h2>Your Details</h2>
    <p>
        Please enter you details below. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci tempora nemo 
        odio fugit quisquam vero debitis, unde maiores rem eius eligendi ut maxime doloribus deserunt dolorem qui 
        reprehenderit, atque tenetur.
    </p>

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
          <p class="error">You must include your Student ID</p>
    </div>

    <div class="form-group">
        <label for="basic-url">Type of Student</label>
        <select class="form-control" name="" id="">
            <option value="">Postgraduate</option>
            <option value="" selected>New Undergraduate</option>
            <option value="">Returning</option>
            <option value="">PGDE</option>
            <option value="">Erasmus</option>
            <option value="">Study Abroad Exchange</option>
        </select>
        <p class="error">You must select what type of student you are.</p>
    </div>

    <div class="form-group">
        <label for="basic-url">Email</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Email Address" value="old@data.com">
            <span class="input-group-btn">
            <button
                type="button"
                class="btn btn-default"
                data-toggle="popover"
                title="Email Address"
                data-content="The Email address you used when registering with the University."
            >
                ?
            </button>
              </span>
          </div>
          <p class="error">You must include your Email Adress</p>
    </div>

      <div class="controls">
            <a
                href="/step1"
                type="button" 
                class="btn btn-default" 
                data-toggle="tooltip" 
                data-placement="auto" 
                title="Tooltip on right"
            >
                Previous
            </a>
            <button type="button" class="btn btn-primary">
                Next Step
            </button>
      </div>
</form>
@stop
