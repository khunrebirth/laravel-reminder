{{-- Include --}}
@extends('template.main')

{{-- Title --}}
@section('title',  'Home Page')

{{-- Content --}}
@section('content')
    @include('components.NavBar')
    <div class="container" style="margin: 80px; 0px;">
        {{--  @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif  --}}
        <div class="row">
            <div class="col-md-12">
                @include('components.ReminderList', ['reminders' => $reminders])
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('components.NewReminder')
            </div>
        </div>
    </div>
    @include('components.Footer')
@stop