@extends('1 Backoffice.layout')

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ basename($user->name) }}</td>
                            <td>{{ $user->email }}</td>
                            {{-- <td>{{ $user->role }}</td> --}}
                            <td>
                                {{-- <a href="{{ route('backoffice.user',['id'=>$user->id]) }}" class="btn btn-primary">Editer</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>



@endsection
