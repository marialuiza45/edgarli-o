<h1>Categorias</h1>
<a href="{{ route('categories.create') }}">Adicionar Categoria</a>
<ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->name }}
            <a href="{{ route('categories.show', $category) }}">Ver</a>
            <a href="{{ route('categories.edit', $category) }}">Editar</a>
            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </li>
    @endforeach
</ul>
