<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de IMC</title>
    <style>
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulário de IMC</h2>
        
        <form method="GET" action="{{ route('imc.resultado') }}">
            <!-- Remova o @csrf pois não é necessário em requisições GET -->

            <div class="form-group">
                <label for="altura">Altura:</label>
                <input 
                    type="floatval" 
                    id="altura" 
                    name="altura" 
                    min="0" 
                    required 
                    placeholder="Digite sua altura"
                >
            </div>

            <div class="form-group">
                <label for="peso">Peso:</label>
                <input 
                    type="number" 
                    id="peso" 
                    name="peso" 
                    required 
                    placeholder="Digite seu peso"
                >
            </div>

            <button type="submit">Enviar</button>
        </form>
        
    </div>
</body>
</html>