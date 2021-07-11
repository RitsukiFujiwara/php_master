<h1>registerページです</h1>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <div>
        id:<input type="text" name="id" id="">
    </div>
    <div>
        pw:<input type="password" name="pwd" id="">
    </div>
    <div>
        nickname:<input type="text" name="nickname" id="">
    </div>
    <div>
        <input type="submit" value="登録">
    </div>
</form>