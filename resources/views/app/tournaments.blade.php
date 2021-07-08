@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @role('admin','captain')
        <h2>Registration Settings</h2>
        @endrole

    </div>
    <hr>
    <div class="row justify-content-center">

        <h2>Tournaments</h2>

    </div>
</div>
@endsection