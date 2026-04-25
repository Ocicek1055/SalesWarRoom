@extends('layouts.app')

@section('title', 'Yeni Paydaş Ekle')

@section('content')
<div class="container">
    <h1>Yeni Paydaş Ekle</h1>
    <form action="{{ route('stakeholders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">İsim</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="project_id">Proje</label>
            <select class="form-control" id="project_id" name="project_id" required>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="type">Paydaş Tipi</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="form-group">
            <label for="contact_info">İletişim Bilgileri</label>
            <textarea class="form-control" id="contact_info" name="contact_info" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
