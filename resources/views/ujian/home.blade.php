@extends('ujian.main')

@section('title', 'Homepage')

@section('konten')
    <div class="container pt-5 pb-5">
        <h1>Halaman Home</h1>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/img/🍀🎧.jpg') }}" alt="Uzumaki Naruto" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Yoshioka Futaba</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection