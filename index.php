<?php
/**
 * Created by PhpStorm.
 * User: a.iodkovskii
 * Date: 12.02.2019
 * Time: 10:49
 */
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="contentCenter">
    <?php
    function fact($num){
        if($num>1) return $num*fact($num-1);
        return $num;
    }
    if(!empty($_POST['num1']) && !empty($_POST['num2'])){
        $res = $_POST["num1"] + $_POST["num2"];
        echo "(".$_POST['num1'].'+'.$_POST['num2'].")!=".fact($res);
    }
    ?>
    <form action="index.php" method="post">
        <div class="formInput">
            <label for="num1">Число 1</label>
            <input type="number" name="num1" id="num1">
        </div>
        <div class="formInput">
            <label for="num2">Число 2</label>
            <input type="number" name="num2" id="num2">
        </div>
        <input type="submit">
    </form>
</div>
</body>