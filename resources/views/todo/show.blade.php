@extends('app.app')

@section('title')
Todo: {{ $name }}
@endsection

@section('content')
<h1 class="text-center my-5">
  {{ $name }}
</h1>

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card card-default">
      <div class="card-header">
        Description
      </div>

      <div class="card-body">
        {{ $description }}
      </div>
    </div>
  </div>
</div>
@endsection