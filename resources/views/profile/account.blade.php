@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
    <h2>{{Auth::user()->fullName}}</h2>
    </div>
</div>
@endsection