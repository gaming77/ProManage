@extends('layout.app')

@section('title', 'Tambah Kategori')

@section('content')
    <h1 class="mb-4">➕ Tambah Kategori</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <button type="submit" class="btn btn-success">💾 Simpan</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">🔙 Kembali</a>
    </form>
@endsection
