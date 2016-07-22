@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Recipes</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <br/><br/>


                </div>
            </div>

            @if (count($recipes) > 0)

              @foreach ($recipes as $recipe)
                <!--<div class="row">-->
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="{{ $recipe->image_url }}" alt="Placeholder Image">
                      <div class="caption">
                        <h3>{{  $recipe->title  }}</h3>
                        <p>
                          {{  $recipe->description  }}
                        </p>
                        <p><a href="{{ URL::to('/') }}/r/{{ $recipe->slug  }}" class="btn btn-primary">Read More</a></a></p>
                      </div>
                    </div>
                  </div>
                <!--</div>-->

              @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
