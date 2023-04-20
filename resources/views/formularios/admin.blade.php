<h2>Formulario 3 (Admin)</h2>
<form action="{{ route('formulario.storeAdmin') }}" method="POST">
    @csrf
    <input type="hidden" name="type" value="Admin">
    <label for="data3">Dato 3:</label>
    <input type="text" name="data3" required>
    <button type="submit">Enviar</button>
</form>
