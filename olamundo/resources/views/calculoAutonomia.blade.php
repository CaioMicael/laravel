<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Calculo de autonomia</title>
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
    
    
    <form method="GET" action="/{{ route('calculoAutonomia.resultado') }}">
    
        <!-- Campo Gasolina -->
        <div class="form-group">
            <label for="gasolina">Tipo de Gasolina:</label>
            <select name="gasolina" id="gasolina" class="form-control" onchange="atualizarValor()">
                <option value="comum">Comum</option>
                <option value="diesel">Diesel</option>
            </select>
        </div>
    
        <!-- Campo Valor -->
        <div class="form-group">
            <label for="valor">Valor por litro:</label>
            <input type="text" name="valor" id="valor" class="form-control" readonly disabled value="R$6,50">
        </div>
    
        <!-- Campo Distância -->
        <div class="form-group">
            <label for="distancia">Distância em KM:</label>
            <input type="number" name="distancia" id="distancia" class="form-control" step="0.1" min="0" required>
        </div>
    
        <!-- Campo Consumo -->
        <div class="form-group">
            <label for="consumo">Consumo (KM/L):</label>
            <input type="number" name="consumo" id="consumo" class="form-control" step="0.1" min="0" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    <script>
        function atualizarValor() {
            const gasolina = document.getElementById('gasolina').value;
            const valorInput = document.getElementById('valor');
            
            if (gasolina === 'comum') {
                valorInput.value = 'R$6,50';
            } else if (gasolina === 'diesel') {
                valorInput.value = 'R$6,78';
            }
        }
    </script>
</body>
</html>