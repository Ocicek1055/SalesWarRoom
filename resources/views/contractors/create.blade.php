@extends('layouts.app')

@section('title', 'Yeni Muteahhit Ekle')

@section('content')
<div class="container">
    <h1>Yeni Muteahhit Ekle</h1>
    <form action="{{ route('contractors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Isim</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="contact_person">Yetkili Kisi</label>
            <input type="text" class="form-control" id="contact_person" name="contact_person">
        </div>
        <div class="form-group">
            <label for="phone_number">Telefon</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
