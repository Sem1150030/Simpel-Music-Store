@extends('layouts.backoffice')

@section('content')
    <div class="flex justify-center">
        @livewire('backoffice.stats')
    </div>
    <div>
        @livewire('charts.pie-chart')
        @stack('scripts')
    </div>

@endsection
