@extends('layouts.app')

@section('content')
<!-- ***** Table Start ***** -->

<section  class=" container ">
                <table class=" table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $i => $user)
                        <tr>
                            <td data-label="N°">{{$i+ 1}}</td>
                            <td data-label="Name">{{$user->name}}</td>
                            <td data-label="Username">{{$user->username}}</td>
                            <td data-label="Email">{{$user->email}}</td>
                            <td data-label="Action">              
                                    <a class="button button--green" href="/profile/{{$user->id }}">Show Profile</a>
                            </td>
                        </tr>
                       @endforeach 
                    
                    </tbody>
                </table>
@endsection