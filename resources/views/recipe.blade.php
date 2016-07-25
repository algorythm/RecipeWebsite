@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <div class="page-header">
        <h1>{{ $recipe->name }}</h1>
      </div>

      <img src="/images/{{ $recipe->banner_image }}" alt="{{ $recipe->name }}" class="img-responsive"> <br/>

      <div class="col-md-4">
        <h3>Ingredients</h3>
        <ul class="list-group">
          @foreach($recipe->ingredients as $ingredient)
            <li class="list-group-item">{{ $ingredient->name }}</li>
          @endforeach
        </ul>
      </div>

      <div class="col-md-8">
        <h3>Walkthrough</h3>

        <!-- http://codeitdown.com/ordered-list-css-styles/ -->
        <ol class="simple-list">
          @foreach($json_w->walkthrough as $step)
            <li class="simple-list">{{ $step->desc }}</li>
          @endforeach
        </ol>
      </div>

      <hr>
      <p>
        <!-- add username -->
        Written by {{ $recipe->users->name }}
      </p>
    </div>
</div>
@endsection
