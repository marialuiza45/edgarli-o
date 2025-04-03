<h1>Categoria: {{ $category->name }}</h1>
<a href="{{ route('categories.edit', $category) }}">Editar</a>
<form action="{{ route('categories.destroy', $category) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
