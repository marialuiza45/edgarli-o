<h1>Produtos</h1>
<a href="{{ route('products.create') }}">Adicionar Produto</a>
<ul>
    @foreach ($products as $product)
        <li>
            {{ $product->name }} - {{ $product->price }}
            <a href="{{ route('products.show', $product) }}">Ver</a>
            <a href="{{ route('products.edit', $product) }}">Editar</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </li>
    @endforeach
</ul>
