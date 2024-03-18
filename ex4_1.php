<?php
    $balanve_value = 10000;
    setcookie("balance", $balanve_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ex4_1.css?v=<?php echo time(); ?>">
</head>
<body>
    <div id="main">
        <div class="spin_block">
            <div class="cell" id="cell1">
                <p id="p_cell1"></p>
            </div>
            <div class="cell" id="cell2">
                <p id="p_cell2"></p>
            </div>
            <div class="cell" id="cell3">
                <p id="p_cell3"></p>
            </div>
        </div>
        <div class="block_ower" id="bo1"></div>
        <div class="block_ower" id="bo2"></div>
        <div class="spin_block" id="blur_b"></div>
    </div>
    <div id="header">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.jing.fm%2Fclipimg%2Ffull%2F283-2839426_casino-sign-png.png&f=1&nofb=1&ipt=324dee30c0184fc047430e68293576c44e851f63840aadc4b90cfb367971f1e5&ipo=images">
    </div>
    <div class="girl_side">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngall.com%2Fwp-content%2Fuploads%2F15%2FCasino-Girl-PNG-Image-HD.png&f=1&nofb=1&ipt=84ad4776013386547b357257589e72ae563ccd671b2a5bf6161bd0067a928b75&ipo=images">
    </div id="stop_block">
    <input type="submit" onclick="stop_f()" id="stop_b" value="HIT IT!">
    <div class="info"></div>
    <div class="info" id="info"> 
        <div class="info_p">
            <p class="info_p">account balance:</p>
            <p class="info_p" id="balance"><?php echo  $_COOKIE["balance"]; ?></p>
        </div>  
    </div>
    <div id="summ_bg1">
        <p id="loose_text"> YOU LOOSE</p>
        <form action="" method="get" >
            <input type="submit" name="again_b1" id="again_b" value="AGAIN!">
        </form>
    </div>
    <div id="summ_bg2">
        <p id="win_text"> YOU WIN</p>
        <form action="" method="get" >
            <input type="submit" name="again_b2" id="again_b" value="AGAIN!">
        </form>
    </div>
    <script src="ex4_1.js?v=<?php echo time(); ?>"></script>
    <?php 
        if(isset($_GET['again_b1'])){
            $balanve_value = $_COOKIE["balance"] -200;
            setcookie("balance", $balanve_value, time() + (86400 * 30), "/");}
        if(isset($_GET['again_b2'])){
            $balanve_value = $_COOKIE["balance"] +200;
            setcookie("balance", $balanve_value, time() + (86400 * 30), "/");}
    ?>
</body>
</html>