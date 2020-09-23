@extends('admin.admin_layouts')

@section('admin_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <a href="{{ route('user.logout') }}"></a>
        </div>
    </div>
</div>
@endsection
