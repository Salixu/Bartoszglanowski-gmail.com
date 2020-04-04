@extends('layouts.main')

@section('content')
    <div class='consultations-container'>
        <div class='row'>
            <div class='col s8 offset-s2'>
                <h1 class='consultations-header'>Umów konsultacje</h1>
            </div>
        </div>
        <form class='consultations-form'>
            <div class='row'>
                <div class='col s3 offset-s3'>
                    <div class="input-field">
                        <input class='input-field' id="first_name" type="text" class="validate">
                        <label for="first_name">Imię</label>
                    </div>
                </div>
                <div class='col s3'>
                    <div class="input-field">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Nazwisko</label>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col s6 offset-s3'>
                    <div class="input-field">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="Email niepoprawny" data-success=""></span>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col s3 offset-s3'>
                    <input placeholder='Wybierz datę' type="text"class="datepicker">
                </div>
                <div class='col s3'>
                    <select>
                        <option class='disable' value="" disabled selected>Wybierz przedmiot</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            <div class='row'>
                <div class='col s6 offset-s3'>
                    <div class="input-field">
                        <textarea id="textarea" class="materialize-textarea"></textarea>
                        <label for="textarea">Opis konsultacji (nie wymagane)</label>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col s2 offset-s7'>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Wyślij
                        <i class="material-icons right">send</i>
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