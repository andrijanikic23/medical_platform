
@extends('layout')

<style>

</style>

@section('content')

    <div>

        <table class="container mt-4 table table-dark table-hover">
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
                    <form action="{{ route('admin.role', ['user' => $user->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <th class="text-center"><button type="submit">Promeni ulogu u {{ \App\Http\AdminHelper::displayButtonRole($user->role) }}</button></th>
                    </form>

                </tr>
            @endforeach
        </table>

    </div>


@endsection
