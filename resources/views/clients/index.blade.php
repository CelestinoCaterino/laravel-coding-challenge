@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Clients</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('clients.create')}}" class="btn btn-primary">Add new</a>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Gender</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($clients as $client)
                <tr>
                    <td>{{$client->first_name}}</td>
                    <td>{{$client->last_name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone_number}}</td>
                    <td>{{$client->gender}}</td>
                    <td>
                        <a href="{{route('clients.show', ['client' => $client->id])}}">Detail</a>
                    </td>
                </tr>
                @empty
                No records
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end">
        {{$clients->links()}}
    </div>
</div>
@endsection

