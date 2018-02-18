@extends('layouts.default')

@section('title', 'Simple-Task')

@section('content')
    <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
            <img class="mr-3" src="{{ asset('dayanyu.png') }}" alt="" width="48" height="48">
            <div class="lh-100">
                <h6 class="mb-0 text-white lh-100">Big Eyes Fish</h6>
                <small>Dev by Chinkiver</small>
            </div>
        </div>

        @include('shared._error')

        {!! Form::open(['class' => 'form-inline', 'route' => 'stone']) !!}
        <div class="form-group" style="margin: 10px">
            <label class="sr-only" for="exampleInputEmail3">Title</label>
            <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Title">
        </div>
        <div class="form-group" style="margin: 10px">
            <label class="sr-only" for="taskContent">Content</label>
            <input type="text" class="form-control" id="taskContent" name="taskContent" placeholder="Content" style="width: 600px">
        </div>
        <button type="submit" class="btn btn-primary" style="margin: 10px">Save</button>
        {!! Form::close() !!}

        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Tasks</h6>

            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
        </div>
    </main>
@endsection