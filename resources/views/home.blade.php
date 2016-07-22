@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('common.errors')

                    You are logged in!

                    <div class="panel-body">
                      <form action="{{ url('home') }}" class="form-horizontal" method="post">
                        <div class="form-group">
                          <label for="recipe_name">Recipe</label>
                          <input type="text" name="recipe_name" id="title" class="form-control" placeholder="Title">
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
                          <label for="image_url">Small Image</label>
                          <input type="text" name="image-url" id="image-url" rows="10" class="form-control" placeholder="Small image url here (242x200 px)">
                        </div>

                        <div class="form-group">
                          <label for="banner_url">Banner Url</label>
                          <input type="text" name="banner_url" id="banner_url" rows="10" class="form-control" placeholder="Banner image here (1624x700)">
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
