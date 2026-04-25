@extends('layouts.app')

@section('title', 'Muteahhitler')

@section('content')
<div class="container">
    <h1>Muteahhitler</h1>
    <a href="{{ route('contractors.create') }}" class="btn btn-primary">Yeni Muteahhit Ekle</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Isim</th>
                <th>Yetkili Kisi</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Aksiyonlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contractors as $contractor)
                <tr>
                    <td>{{ $contractor->id }}</td>
                    <td>{{ $contractor->name }}</td>
                    <td>{{ $contractor->contact_person }}</td>
                    <td>{{ $contractor->phone_number }}</td>
                    <td>{{ $contractor->email }}</td>
                    <td>
                        <a href="{{ route('contractors.show', $contractor->id) }}" class="btn btn-info">Detay</a>
                        <a href="{{ route('contractors.edit', $contractor->id) }}" class="btn btn-warning">Duzenle</a>
                        <form action="{{ route('contractors.destroy', $contractor->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
