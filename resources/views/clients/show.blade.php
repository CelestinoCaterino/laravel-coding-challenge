@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>{{$client->first_name}}  {{$client->last_name}} </h1>
    <p>Email: {{$client->email}}</p>
    <p>Phone number: {{$client->phone_number}}</p>
    <p>Gender: {{$client->gender}}</p>
    <p>Address: {{$client->address}}</p>
    <p>Nationality: {{$client->nationality}}</p>
    <p>Date of birth: {{$client->date_of_birth}}</p>
    <p>Education background: {{$client->education_background}}</p>
    <p>Preferred contact method: {{$client->preferred_contact_method}}</p>
</div>
@endsection

