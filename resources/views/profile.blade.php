@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <h1>{{ $user->name }}</h1>
                    @foreach($user->recipes as $recipe)
                      <p>
                        {{ $recipe->name }}
                      </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
