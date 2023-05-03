<h2>Formulario Clima</h2>
<form action="{{ route('formulario.storeInfra') }}" method="POST">
    @csrf
    <input type="hidden" name="type" value="infra">
    <label for="data1">Dato 1:</label>
    <input type="text" name="data1" required>
    <button type="submit">Enviar</button>
</form>
