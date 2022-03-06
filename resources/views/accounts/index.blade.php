@extends('layouts.app')

@section('content')

    @auth
    <div class="container">
        hello {{Auth::id()}} in accounts
        <br>
        role_id = {{App\Http\Controllers\Admin\RoleController::getRoleId('accounts' , 'view')}}
        <br>
        @if(App\Http\Controllers\Admin\RoleController::haveRole(App\Http\Controllers\Admin\RoleController::getRoleId('accounts' , 'view') , Auth::id()))
        you have view role
        @endif
    </div>
    @endauth
@endsection
