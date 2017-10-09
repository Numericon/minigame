<html>
    <body>
        <div>
<?php
session_start();
session_start();
$_SESSION['user'] = 10;
$_SESSION['comp'] = 10;
if(isset($_SESSION['hook'])&&($_SESSION['hook'] = rand(1,3))){
    $_SESSION['comp'] -= rand(1,4);
}else{
    $_SESSION['user'] -= rand(1,4);
}
?>
            <form action="">
                Нанесите урон противнику<input type="text" name="hook" value="">
                <input type="submit">
            </form>
            </div>
</body>
</html>