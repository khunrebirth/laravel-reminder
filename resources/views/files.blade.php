{{-- Include --}}
@extends('template.main')

{{-- Title --}}
@section('title',  $title)

{{-- Content --}}
@section('content')
    <div class="container" style="margin: 80px; 0px;">
        <div class="row">
            <div class="col-md-8">
                @include('components.ListFile', ['files' => $files])
            </div>
            <div class="col-md-4">
                @include('components.AddFile')
            </div>
        </div>
    </div>
@stop