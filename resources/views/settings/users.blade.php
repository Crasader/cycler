@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User settings</div>

                <div class="card-body">
                   <form id="settings" action="{{route('roleUserFormSubmit')}}" method="POST">
                       <p>
                           <select name='user_id' required>
                            @foreach($users as $user)
                               <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                           </select>
                       </p>
                       <p>
                           <select name='role_id' required>
                            @foreach($roles as $role)
                               <option value="{{$role->id}}">{{$role->displayName."($role->name)"}}</option>
                            @endforeach
                           </select>
                       </p>
                       @csrf
                       <p>
                           <button type="submit">Сохранить</button>
                       </p>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
