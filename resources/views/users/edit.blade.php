<h1>Editar Usuário</h1>
<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}" required>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <input type="password" name="password" placeholder="Nova Senha (opcional)">
    <input type="password" name="password_confirmation" placeholder="Confirmar Nova Senha">
    <button type="submit">Atualizar</button>
</form>
