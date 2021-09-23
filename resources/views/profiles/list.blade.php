@extends('layouts.app')

@section('content')
<!-- ***** Table Start ***** -->

<section  class=" container ">
                <table class=" table">
                    <thead>
                        <tr>
                            <th class="text-center align-middle">N°</th>
                            <th class="text-center align-middle">Image</th>
                            <th class="text-center align-middle">Name</th>                  
                            <th class="text-center align-middle">Username</th>
                            <th class="text-center align-middle">Email</th>
                            <th class="text-center align-middle">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $i => $user)
                        <tr>
                            <td data-label="N° " class="text-center align-middle">{{$i+ 1}}</td>
                            <td data-label="Image"class=" text-center align-middle" >
                            <img src="{{$user->profile->profileImage()}}" style="width: 100px;" class="rounded-circle">
                            </td>
                            <td data-label="Name" class="text-center align-middle">{{$user->name}}</td>
                            <td data-label="Username" class="text-center align-middle">{{$user->username}}</td>
                            <td data-label="Email" class="text-center align-middle">{{$user->email}}</td>
                            <td data-label="Action" class="text-center align-middle">              
                                    <a class="button button--green" href="/profile/{{$user->id }}">Show Profile</a>

                            </td>
                        </tr>
                       @endforeach 
                    
                    </tbody>
                </table>
                <div class="row">
       
    </div>
@endsection