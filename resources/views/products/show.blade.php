<h1>Produto: {{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Preço: R$ {{ number_format($product->price, 2, ',', '.') }}</p>
<a href="{{ route('products.edit', $product) }}">Editar</a>
<form action="{{ route('products.destroy', $product) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
