@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">Statystyki Postów</h5>
                    <p class="card-text">Liczba postów: 150</p>
                    <a href="#" class="btn btn-primary">Zobacz więcej</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">Statystyki Użytkowników</h5>
                    <p class="card-text">Liczba użytkowników: 250</p>
                    <a href="#" class="btn btn-primary">Zobacz więcej</a>
                </div>
            </div>
        </div>
    </div>
@endsection
