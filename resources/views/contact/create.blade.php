@extends('layouts.base', ['titre'=>'Contact'])

@section('contenu')

<div class="container col-sm-6">
    <div>
        <h3>Get In Touche</h3>
        <p class="text-muted">If you have trouble in this service, please <a href="maximeamini1@gmail.com">Ask for help</a></p>
    </div>

    @endisset

    <form action="{{ route('contact.store') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for='name'>Name:</label>
        <input id="name" name="name" type="text" placeholder="Name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{old('name')}}" required>
        </div>

        <div class="form-group">
            <label class="" for='email'>Email:</label>
            <input id="email" name="email" type="mail" placeholder="Email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{old('email')}}" required>
        </div>

        <div class="form-group">
            <textarea name="mess" cols="30" rows="10" class="form-control {{ $errors->has('mess') ? 'is-invalid' : '' }}" required>{{old('mess')}}</textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit Enquiry &raquo;" class="btn btn-primary col-sm-12">
        </div>

    </form>
</div>

@endsection
