<!DOCTYPE html>
<html>
<head>
	<title>Counter Test</title>
</head>
<body>

<h1>Plugin Counter Button Click</h1>

1. Copy folder counter ke root project</br>
2. Import tabel counter.sql yang ada di dalam folder counter dan import ke database kalian</br>
3. Lalu setting koneksi database di file folder counter/config.php</br>

<h4>Tambahkan script berikut di button / link </h4>

onclick="count_button_r45()"<br>

<h3>sehingga menjadi seperti berikut</h3>
<xmp>
<a target="_blank" href="http://wa.me/6212345678" onclick="count_button_r45()">Sample click to Whatsapp</a>
</xmp>

<h4>Tambahkan script berikut diatas tag &lt;/body&gt; </h4>

<xmp>
<script type="text/javascript" src="counter/counter.js"></script>
</xmp>

<a target="_blank" href="http://wa.me/6212345678" onclick="count_button_r45()">Sample click to Whatsapp</a>

<script type="text/javascript" src="counter/counter.js"></script>
</body>
</html>