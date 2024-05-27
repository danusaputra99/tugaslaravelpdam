<!DOCTYPE html>
<html>
<head>
    <title>PDAM Bill Calculation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>PDAM Tirta Mayang</h1>
        @if (isset($bill))
            <div class="alert alert-success">
                <p>Usage: {{ $usage }} m<sup>3</sup></p>
                <p>Total Bill: Rp. {{ number_format($bill, 0, ',', '.') }}</p>
            </div>
        @endif
        <form action="{{ route('bills.calculate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="usage">Usage (m<sup>3</sup>)</label>
                <input type="number" class="form-control" id="usage" name="usage" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>
</body>
</html>
