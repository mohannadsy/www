@extends('layouts.app')

@section('content')

    @auth
    <div class="container">
        hello {{Auth::user()->name}} in accounts
        <br>
        @if(App\Http\Controllers\Admin\RoleController::haveRole(App\Http\Controllers\Admin\RoleController::getRoleId('accounts' , 'view') , Auth::id()))
        you have view role
        @endif
    </div>
    @endauth
@endsection
