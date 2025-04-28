@extends('layout.app')

@section('title', 'Daftar Produk')

@section('content')
<h1 class="mb-4">📦 Manajemen Produk</h1>

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">➕ Tambah Produk</a>

    <form method="GET" action="{{ route('products.index') }}" class="row gy-2 gx-2 align-items-end mb-3">
        <div class="col-auto">
            <label class="form-label">Cari</label>
            <input type="search" name="search" class="form-control" placeholder="Nama produk…" value="{{ request('search') }}">
        </div>
        <div class="col-auto">
            <label class="form-label">Sort by</label>
            <select name="sort" class="form-select">
            <option value="">— Default —</option>
            <option value="name_asc"   {{ request('sort')=='name_asc'   ? 'selected':'' }}>Nama A→Z</option>
            <option value="name_desc"  {{ request('sort')=='name_desc'  ? 'selected':'' }}>Nama Z→A</option>
            <option value="price_asc"  {{ request('sort')=='price_asc'  ? 'selected':'' }}>Harga ↑ Murah</option>
            <option value="price_desc" {{ request('sort')=='price_desc' ? 'selected':'' }}>Harga ↓ Mahal</option>
            <option value="stock_asc"  {{ request('sort')=='stock_asc'  ? 'selected':'' }}>Stok ↑ Rendah</option>
            <option value="stock_desc" {{ request('sort')=='stock_desc' ? 'selected':'' }}>Stok ↓ Tinggi</option>
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-outline-secondary">🔍 Filter</button>
        </div>
    </form>

<x-alert type="success" :message="session('success')" />
<x-alert type="danger" :message="session('error')" />
<div class="mb-3">
    <a href="{{ route('products.export.excel') }}" class="btn btn-success">⬇️ Export Excel</a>
    <a href="{{ route('products.export.pdf') }}" class="btn btn-danger">⬇️ Export PDF</a>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description ?? '-' }}</td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>
                        @if ($product->stock <= 0)
                            <span class="badge bg-danger">Stok Habis</span>
                        @elseif ($product->stock <= 5)
                            <span class="badge bg-warning text-dark">Stok Hampir Habis ({{ $product->stock }})</span>
                        @else
                            {{ $product->stock }}
                        @endif
                    </td>
                    <td>{{ $product->category->name ?? '-' }}</td>
                    <td>
                    <div class="d-flex flex-wrap justify-content-center gap-1">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm px-2 py-1">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm px-2 py-1">
                                🗑️ Hapus
                            </button>
                        </form>
                    </div>
                </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-3">
    {{ $products->links() }}
</div>
@endsection
