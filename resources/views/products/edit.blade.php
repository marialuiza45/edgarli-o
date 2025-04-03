<h1>Editar Produto</h1>
<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}" required>
    <textarea name="description" required>{{ $product->description }}</textarea>
    <input type="number" name="price" value="{{ $product->price }}" required>
    <button type="submit">Atualizar</button>
</form>
