<h1>Usuários</h1>
<a href="{{ route('users.create') }}">Adicionar Usuário</a>
<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} - {{ $user->email }}
            <a href="{{ route('users.show', $user) }}">Ver</a>
            <a href="{{ route('users.edit', $user) }}">Editar</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </li>
    @endforeach
</ul>
