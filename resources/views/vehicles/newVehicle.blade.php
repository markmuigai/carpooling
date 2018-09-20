@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <form class="" action="{{route('storeVehicle')}}" method="post">
    {{csrf_field()}}

  </form>
</div>
@endsection
