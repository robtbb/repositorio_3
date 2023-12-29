<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formata.css">
    <title>Reservas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .reservation-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        button {
            display: block;
            text-align: center;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="reservation-form">
        <h2>Faça uma Reserva</h2>
        <form action="process_reservation.php" method="post">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="date">Data:</label>
                <input type="text" id="date" name="date" placeholder="DD/MM/YYYY">
            </div>
            <div class="form-group">
                <label for="time">Hora:</label>
                <input type="text" id="time" name="time" placeholder="HH:MM AM/PM">
            </div>
            <div class="form-group">
                <input type="submit" value="Reservar">
            </div><br><br>

            <button type="button" onclick="history.back()">Voltar</button>
        </form>
    </div>
</body>

</html>