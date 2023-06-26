<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="active" {{ $product->status === 'active' ? 'selected' : '' }}>Ativo</option>
                <option value="inactive" {{ $product->status === 'inactive' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
