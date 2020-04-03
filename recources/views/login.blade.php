@extends('layouts.main')

@section('content')
    <div class='login-container'>
        <div class='row'>
            <div class='col s8 offset-s2'>
                <h1 class='login-header'>Zaloguj się</h1>
            </div>
        </div>
        <form class='login-form'>
            <div class='row'>
                <div class='col s4 offset-s4'>
                    <div class="input-field">
                        <input class="input-field" id="login" type="text" class="validate">
                        <label for="login">Login</label>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col s4 offset-s4'>
                    <div class="input-field">
                        <input id="password" type="password" class="validate">
                        <label for="password">Hasło</label>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col s4 offset-s4'>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Zaloguj
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
        });
        $(document).ready(function(){
            $('select').formSelect();
        });
        $(document).ready(function() {
            M.updateTextFields();
        });
    </script>
@endsection