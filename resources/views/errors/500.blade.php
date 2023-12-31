@extends('errors.layout')

@php
    $error_number = 500;
@endphp

@section('title')
    {{-- It's not you, it's me. --}}
    Sa fonction pas
@endsection

@section('description')
    @php
        $default_error_message = 'An internal server error has occurred. If the error persists please contact the development team.';
    @endphp
    {!! isset($exception)
        ? ($exception->getMessage()
            ? e($exception->getMessage())
            : $default_error_message)
        : $default_error_message !!}
@endsection
