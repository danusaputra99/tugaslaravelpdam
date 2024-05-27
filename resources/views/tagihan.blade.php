<!-- resources/views/tagihan.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>TUGAS PDAM</title>
    <style>
        body {
            font-family: Arial sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 60px 0;
        }

        form {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 20px;
            font-weight: bold;
            color: #555;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Tagihan PDAM</h1>
    <form action="/tagihan" method="post">
        @csrf
        <label for="pemakaian">Pemakaian Air (m<sup>3</sup>)</label>
        <input type="number" id="pemakaian" name="pemakaian" required>
        <button type="submit">Hitung Tagihan</button>
    </form>

    @if (isset($tagihan))
        <h2>Tagihan: Rp. {{ number_format($tagihan) }}</h2>
    @endif
</body>
</html>
