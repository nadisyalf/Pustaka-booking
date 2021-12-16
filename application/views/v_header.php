<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Prog II || Merancang Template sederhana dengan codeigniter</title>
    <link rel="stylesheet"type="text/css" href="http://localhost/pustaka-booking/assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper"></div>
    <header>
        <hgroup>
            <h1>RentalBuku.Net</h1>
            <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
        </hgroup>
        <nav>
            <ul>
                <li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
                <li><a href="<?php echo base_url().'index.php/web/about' ?>">about</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>
</body>
</html>