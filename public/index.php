<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../script/index.js"></script>
    <link rel="stylesheet" href="../css/index.css">
    
</head>
<body>
    <div>
        <button onclick="muncul()">Test</button>
    </div>
    <div class="kotak" id="kotak">

    </div>
    <?php
        require '../app/db/connection.php';
        require '../app/controllers/showController.php';
        require '../app/models/show.php';

        $controller = new showController();
        $controller->show();
    ?>

    <h5>kocak</h5>

</body>
</html>