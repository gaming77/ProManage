@extends('layout.app')

@section('title', 'Edit Kategori')

@section('content')
    <h1 class="mb-4">✏️ Edit Kategori</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">💾 Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">🔙 Kembali</a>
    </form>
@endsection
