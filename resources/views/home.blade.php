@extends('layouts.app')
@section('content')
<div class="card-body">
    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
    
  </div>
@endsection
