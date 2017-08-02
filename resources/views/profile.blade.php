{{-- Include --}}
@extends('template.main')

{{-- Title --}}
@section('title',  $title)

{{-- Content --}}
@section('content')
    @include('components.NavBar')
    <div class="container" style="margin: 80px; 0px;">
        <h1 class="text-center">{{ $title }}</h1><br />
        <div class="row">
            <div class="col-md-8">
                <img src="/images/profile.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-4">
                @foreach ($profiles as $profile)
                    @if ($loop->iteration == 2)
                        <p>This is the second iteration</p>
                    @else
                        <p>This is the first iteration</p>                    
                    @endif
                    <p>Name : {{ $profile['name'] }}</p>
                    <p>{{ $profile['occupation'] }}</p>
                    <p>website : 
                        <a href="{{ $profile['website'] }}">{{ $profile['website'] }}</a>
                    </p>
                    <p>{{ $profile['tags'] }}</p>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
    @include('components.Footer')
@stop