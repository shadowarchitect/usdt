<?php
// Simple QR generator langsung
$address = $_GET['address'] ?? '';

if (empty($address)) {
    die('Kasih parameter: ?address=T9zP14n5gQ...');
}

// Redirect ke QR code generator eksternal
$qrUrl = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=" . urlencode($address);
?>
<!DOCTYPE html>
<html>
<head>
    <title>USDT QR Generator</title>
</head>
<body>
    <h1>QR Code USDT</h1>
    <p>Address: <?php echo htmlspecialchars($address); ?></p>
    <img src="<?php echo $qrUrl; ?>" alt="QR Code">
    
    <br><br>
    <form>
        <input type="text" name="address" placeholder="Masukkan USDT address" style="width: 400px;">
        <button type="submit">Generate QR</button>
    </form>
</body>
</html>