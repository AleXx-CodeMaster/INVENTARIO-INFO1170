<!-- resources/views/barcode.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lector de Códigos de Barras</title>
</head>
<body>
    <h1>Lector de Códigos de Barras</h1>
    <form id="barcode-form">
        <input type="text" name="barcode" id="barcode" placeholder="Escanear código de barras" autofocus>
    </form>
    <div id="result"></div>
</body>
<script>
    document.getElementById('barcode-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const barcode = document.getElementById('barcode').value;

        fetch('/process-barcode', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ barcode: barcode }),
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('result').textContent = data.result;
        })
        .catch(error => {
            console.error(error);
        });

        document.getElementById('barcode').value = ''; // Limpiar el campo después del escaneo
    });
</script>
</html>
