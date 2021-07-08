@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @role('admin','captain')
        <h2>Team Management</h2>
        @endrole

    </div>
    <hr>
</div>
@endsection
