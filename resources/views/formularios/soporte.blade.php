<h2>Formulario 2 (Soporte)</h2>
<form action="{{ route('formulario.storeSoporte') }}" method="POST">
    @csrf
    <input type="hidden" name="type" value="soporte">
    <label for="data2">Dato 2:</label>
    <input type="text" name="data2" required>
    <button type="submit">Enviar</button>
</form>
