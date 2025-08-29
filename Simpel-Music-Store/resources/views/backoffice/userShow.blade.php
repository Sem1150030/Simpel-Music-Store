@extends('layouts.backoffice')

@section('content')
    @livewire('backoffice.users.user-details', ['user' => $user])
@endsection
