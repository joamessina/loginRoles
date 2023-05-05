<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Prensa</title>
    <link rel="stylesheet" href="{{ asset('formularioPrensa/prensa_form.css') }}">
</head>
<body>
    <div class="container">
        <form action="{{ route('formulario.storePrensa') }}" method="POST">
            @csrf
            <input type="hidden" name="type" value="infra">
            <h1>Formulario Prensa</h1>
            <label for="comunicado-dia">Comunicado del día:</label>
            <input type="text" id="comunicadoDia" name="comunicadoDia" required><br><br>

            <label for="comunicado-nro">Comunicado Nro:</label>
            <input type="text" id="comunicadoNro" name="comunicadoNro" required><br><br>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" required><br><br>

            <label for="contenido">Contenido:</label><br>
            <textarea id="contenido" name="contenido" rows="4" cols="50" required></textarea><br><br>

            <input type="checkbox" id="confirmCheckbox" onclick="toggleSubmitButton()">
            <label for="confirm-checkbox">Confirmar la información ingresada</label><br><br>

            <button type="submit" id="submit-button" disabled>Enviar</button>
        </form>
    </div>
    <script src="{{ asset('formularioPrensa/prensa_form.js') }}"></script>
</body>
</html>
