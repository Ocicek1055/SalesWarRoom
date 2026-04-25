@extends('layouts.app')

@section('title', 'Yeni Proje Ekle')

@section('content')
<div class="container">
    <h1>Yeni Proje Ekle</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Proje Adı</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="contractor_id">Müteahhit</label>
            <select class="form-control" id="contractor_id" name="contractor_id" required>
                @foreach ($contractors as $contractor)
                    <option value="{{ $contractor->id }}">{{ $contractor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="number_of_residences">Konut Sayısı</label>
            <input type="number" class="form-control" id="number_of_residences" name="number_of_residences" required>
        </div>
        <div class="form-group">
            <label for="start_date">Başlangıç Tarihi</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="form-group">
            <label for="end_date">Bitiş Tarihi</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
