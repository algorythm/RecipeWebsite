@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @foreach ($recipes as $recipe)
                      <a href="{{ url('recipe') }}/{{ $recipe->slug }}">
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail"><img src="/images/{{ $recipe->post_image }}" alt="{{ $recipe->name }}">
                            <h3>{{ $recipe->name }}</h3>
                            <p>{{ $recipe->description }}</p>
                          </div>
                        </div>
                      </a>

                      <br/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
