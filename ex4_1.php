<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ex4_1.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- <?php 
    require __DIR__ . '/funcs.php';
    ?> -->
    <div id="main">
        <div id="spin_block">
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
    </div>
    <div id="header">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.jing.fm%2Fclipimg%2Ffull%2F283-2839426_casino-sign-png.png&f=1&nofb=1&ipt=324dee30c0184fc047430e68293576c44e851f63840aadc4b90cfb367971f1e5&ipo=images">
    </div>
    <div class="girl_side">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngall.com%2Fwp-content%2Fuploads%2F15%2FCasino-Girl-PNG-Image-HD.png&f=1&nofb=1&ipt=84ad4776013386547b357257589e72ae563ccd671b2a5bf6161bd0067a928b75&ipo=images">
    </div id="stop_block">
        <form method="POST">
            <input type="submit" name="stop_b" id="stop_b" value="HIT IT!">
        </form>
    <div>

    </div>
    <script src="ex4_1.js?v=<?php echo time(); ?>"></script>
    <?php
    
    ?>
</body>
</html>