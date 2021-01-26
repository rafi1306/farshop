<form action="<?php echo BASE_URL."module/kategori/action.php"; ?>" method="post">
    <div class="element-form">
        <label for="kategori">Kategori</label>
        <span><input type="text" name="kategori" id="kategori"></span>
    </div>
    <div class="element-form">
        <label for="status">Status</label>
        <span>
            <input type="radio" name="status" value="on" id="status" />On
            <input type="radio" name="status" value="off" id="status" />Off
        </span>
    </div>
    <div class="element-form">
        <span><input type="submit" name="button" value="Add"></span>
    </div>
</form>