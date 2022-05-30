@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h1>
                    Contact us:
                </h1>
                <form action="{{route()}}" method="post"></form>
            </div>
        </div>
    </div>
@endsection
