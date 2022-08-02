@extends('layouts.master')

@section('content')

@if (\Auth::user()->role_id == 1)

@include('layouts.boxes')

@else

@include('layouts.perpus')

@endif

@endsection
