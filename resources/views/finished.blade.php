{{-- Include --}}
@extends('template.main')

{{-- Title --}}
@section('title',  $title)

{{-- Content --}}
@section('content')
    @include('components.NavBar')
    <div class="container" style="margin: 80px; 0px;">
        @include('components.ReminderFinishedList', ['reminders' => $reminders])
    </div>
    @include('components.Footer')
@stop