<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Sono</title>
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
        <h2>Formulário de Sono</h2>
        
        <form method="GET" action="{{ route('sono.resultado') }}">
            <!-- Remova o @csrf pois não é necessário em requisições GET -->

            <div class="form-group">
                <label for="idade">Idade:</label>
                <input 
                    type="number" 
                    id="idade" 
                    name="idade" 
                    min="0" 
                    required 
                    placeholder="Digite sua idade"
                >
            </div>

            <div class="form-group">
                <label for="horas_sono">Horas de Sono:</label>
                <input 
                    type="number" 
                    id="horas_sono" 
                    name="horas_sono" 
                    min="0" 
                    max="24" 
                    step="0.5"
                    required 
                    placeholder="Digite as horas de sono"
                >
            </div>

            <button type="submit">Enviar</button>
        </form>
        
    </div>
</body>
</html>