<?php
    include_once("function/helper.php");
    $page = isset($_GET['page']) ? $_GET['page'] : false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>farshop | jual barang elektronik</title>
    <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css">
</head>

<body>
    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL."index.php"; ?>">
                <img src="<?php echo BASE_URL."images/logo.png"; ?>" alt="" />
            </a>
            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a>
                    <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a>
                </div>
                <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>" alt="" />
                </a>
            </div>
        </div>

        <div id="content">
            <?php 
                $filename = "$page.php";
                if(file_exists($filename)){
                    include_once($filename);
                } else{
                    echo "Maaf, file tidak ada di dalam sistem.";
                }
            ?>
        </div>

        <div id="footer">
            <p>&copy; farshop 2021</p>
        </div>
    </div>
</body>
</html>