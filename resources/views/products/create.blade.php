<h1>Criar Produto</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome do Produto" required>
    <textarea name="description" placeholder="Descrição" required></textarea>
    <input type="number" name="price" placeholder="Preço" required>
    <button type="submit">Salvar</button>
</form>
