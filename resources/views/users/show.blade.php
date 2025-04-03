<h1>Usuário: {{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>
<a href="{{ route('users.edit', $user) }}">Editar</a>
<form action="{{ route('users.destroy', $user) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
