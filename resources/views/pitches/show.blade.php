@extends('layouts.app')

<!-- @section('title', 'Pitch Details') -->

@section('content')
    <ul>
        <li>City: {{ $pitch->city }}</li>
        <li>Street Address: {{ $pitch->streetAddress }}</li>
        <li>Postcode: {{ $pitch->postcode }}</li>
    </ul>
@endsection

