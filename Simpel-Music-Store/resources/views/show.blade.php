@extends('layouts.app')

@section('content')
    <div class="">
        @livewire('horizontal-slider', ['data' => $artists])
    </div>
@endsection
