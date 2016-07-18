@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <div class="panel-body">
                      <form action="{{ url('home') }}" class="form-horizontal" method="post">
                        <div class="form-group">
                          <label for="title">Recipe</label>
                          <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                        </div>

                        <div class="form-group">
                          <label for="slug">Slug</label>
                          <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug URL">
                        </div>

                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea name="description" id="description" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="walkthrough">Walkthrough</label>
                          <textarea name="walkthrough" id="walkthrough" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                          <div class="col sm offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">Insert Row</button>
                          </div>
                        </div>

                        {{ csrf_field() }}
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
