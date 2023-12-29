<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formata.css">
    <title>Cardápio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .menu-item {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 15px;
            border-radius: 10px;
            background-color: white;
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .menu-item h2 {
            margin-top: 0;
            font-size: 24px;
            color: #007bff;
        }

        .menu-item p {
            font-size: 16px;
            color: #555;
        }

        .menu-item button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .menu-item button:hover {
            background-color: #218838;
        }

        div.menu-item {
            width: 40pc;
        }

        button.back {
            display: block;
            text-align: center;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="menu-item">
        <h2>Prato do Chef</h2>
        <p>Uma criação especial do nosso chef com ingredientes frescos e sazonais. Acompanha uma variedade de legumes orgânicos.</p>
        <p><strong>Preço:</strong> R$ 32,50</p>
        <button>Adicionar ao Carrinho</button>
    </div>

    <div class="menu-item">
        <h2>Pasta Carbonara</h2>
        <p>Massa italiana al dente com molho carbonara cremoso, bacon crocante e queijo parmesão. Uma verdadeira explosão de sabores!</p>
        <p><strong>Preço:</strong> R$ 24,00</p>
        <button>Adicionar ao Carrinho</button>
    </div>

    <div class="menu-item">
        <h2>Pizza Margherita</h2>
        <p>Uma clássica pizza italiana com molho de tomate, muçarela fresca, tomate e manjericão. Assada em forno a lenha para uma crocância perfeita.</p>
        <p><strong>Preço:</strong> R$ 18,50</p>
        <button>Adicionar ao Carrinho</button>
    </div>

    <div class="menu-item">
        <h2>Tiramisu</h2>
        <p>Uma deliciosa sobremesa italiana com camadas de café, queijo mascarpone, biscoitos champanhe e cacau em pó. Uma verdadeira indulgência!</p>
        <p><strong>Preço:</strong> R$ 12,00</p>
        <button>Adicionar ao Carrinho</button>
    </div><br><br>

    <a href="index.php"> <button class="back">Back<button></a>
</body>

</html>