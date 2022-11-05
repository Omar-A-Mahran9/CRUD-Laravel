@extends('Layout/Master')
@section('title', 'show')

@section('content')


    <div class="container pt-5">
        @foreach ($array as $ar)
            @if ($ar['id'] == $iid)
                <div class="card mb-5">
                    <h5 class="card-header">Post Info</h5>
                    <div class="card-body">
                        <h5 class="card-title">Title: {{ $ar['title'] }}</h5>
                        <p class="card-text">Description: {{ $ar['Desc'] }}</p>

                    </div>
                </div>

                <div class="card">
                    <h5 class="card-header">Post Creator Info</h5>
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $ar['Posted_by'] }}</h5>
                        <p class="card-text">Email: {{ $ar['email'] }}</p>
                        <p class="card-text">Created At: {{ $ar['creation_Data'] }}</p>

                    </div>
                </div>
            @endif
        @endforeach

    </div>
@endsection
