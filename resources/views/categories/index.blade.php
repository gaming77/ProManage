@extends('layout.app')

@section('title', 'Daftar Kategori')

@section('content')
    <h1 class="mb-4">📚 Manajemen Kategori</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">➕ Tambah Kategori</a>

    <x-alert type="success" :message="session('success')" />

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">✏️ Edit</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">🗑️ Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">Belum ada kategori.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
         <a href="{{ route('products.index') }}" class="btn btn-secondary">🔙 Kembali</a>
    </div>
@endsection
