@extends('layouts.backoffice')

@section('content')
    <div>
        @livewire('backoffice.users.user-details', ['user' => $user])
    </div>
    <div class="mt-10 not-first-of-type:flex justify-center items-center w-full">
        @livewire('backoffice.users.user-stats', ['user' => $user])
    </div>
@endsection
