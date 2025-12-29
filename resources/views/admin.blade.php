
@extends('layout')

<style>

    .fixed {
        table-layout:fixed;
    }

    .fixed td {
        overflow:hidden;
    }

</style>

@section('content')

    <div>

        <table class="container mt-4 table table-dark table-hover fixed">
            <tr>
                <th>id</th>
                <th>Ime i prezime</th>
                <th>Email</th>
                <th>Uloga</th>
                <th></th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->email }}</th>
                    <th>{{ $user->role }}</th>
                    @if($user->role == 'staff' || $user->role == 'patient')
                        <form action="{{ route('admin.role', ['user' => $user->id]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <th class="text-center"><button class="btn btn-light" style="width:200px; height:40px;" type="submit">Promeni ulogu u {{ \App\Http\AdminHelper::displayButtonRole($user->role) }}</button></th>
                        </form>
                    @else
                        <th class="text-center">ADMIN</th>
                    @endif

                </tr>
            @endforeach
        </table>

    </div>


@endsection
