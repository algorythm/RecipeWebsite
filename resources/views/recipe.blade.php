@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="page-header">
      <h1>{{ $recipes->title }}</h1>
    </div>

    <img src="/{{ $recipes->banner_url }}" alt="{{ $recipes->title }}" class="img-responsive">
    <br>

    <div class="col-md-4">
      <h4>Ingredientser</h4>

      <ul class="list-group">
        <!-- Here I tried to implement the pivot table, but it didn't work :( -->

        <li class="list-group-item">2 fed hvidløg</li>
        <li class="list-group-item">1 gulerod</li>
        <li class="list-group-item">1 løg</li>
        <li class="list-group-item">Olie til stegning</li>
        <li class="list-group-item">300g hakket oksekød</li>
        <li class="list-group-item">2 spsk. tomatpuré</li>
        <li class="list-group-item">1 dåse hakkede tomater</li>
        <li class="list-group-item">Salt og peper</li>
        <li class="list-group-item">Lidt sukker</li>
      </ul>
    </div>

    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-body">
          {{ $recipes->walkthrough }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
