<h1>loginページです</h1>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <div>
        id:<input type="text" name="id" id="">
    </div>
    <div>
        pw:<input type="text" name="pwd" id="">
    </div>
    <div>
        <input type="submit" value="ログイン">
    </div>
</form>