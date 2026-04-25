@extends('layouts.app')

@section('title', 'Yeni Satış Aktivitesi Ekle')

@section('content')
<div class="container">
    <h1>Yeni Satış Aktivitesi Ekle</h1>
    <form action="{{ route('sales-activities.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="project_id">Proje</label>
            <select class="form-control" id="project_id" name="project_id" required>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="activity_type">Aktivite Tipi</label>
            <input type="text" class="form-control" id="activity_type" name="activity_type" required>
        </div>
        <div class="form-group">
            <label for="activity_date">Tarih</label>
            <input type="date" class="form-control" id="activity_date" name="activity_date" required>
        </div>
        <div class="form-group">
            <label for="notes">Notlar</label>
            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
@endsection
