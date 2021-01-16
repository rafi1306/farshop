<?php
    if($user_id) {
        header("location: ".BASE_URL);
    }
?>

<div id="container-user-akses">

    <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="post">
    <?php 
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

        if($notif == "true") {
            echo "<div class='notif'>Maaf, email atau password yang kamu masukan tidak cocok.</div>";
        }
    ?>
        <div class="element-form">
            <label for="email">Email</label>
            <span><input type="text" name="email" id="email"></span>
        </div>
        <div class="element-form">
            <label for="password">Password</label>
            <span><input type="password" name="password" id="password"></span>
        </div>
        <div class="element-form">
            <span><input type="submit" value="login"></span>
        </div>
    </form>

</div>