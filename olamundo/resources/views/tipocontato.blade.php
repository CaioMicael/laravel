<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 12px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            font-size: 14px;
            margin-bottom: 20px;
            color: #4CAF50;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Cadastro de Tipo de Contato</h1>

        <form action="{{ route('tipocontato.resultado') }}" method="GET">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" required></textarea>

            <button type="submit">Salvar</button>
        </form>
    </div>

</body>
</html>
