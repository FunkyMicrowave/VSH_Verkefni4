<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DC</title>
        <meta name="viewport" content="width=device-with, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="../Stilsida/main.css">
        <script src="../smooth-scroll.js"></script>
    </head>
    <body>
        
        <?php $file = '../php/menu.php';
            if (file_exists($file) && is_readable($file)) {
                require $file;
            } 
            else {
                throw new Exception("$file can't be found");
            }
        ?>
        <div style="background: #00F;" class="rammi">
            <?php include '../php/kallar.php'; ?>
        </div>
        
        
        <script>
            smoothScroll.init();
        </script>
    </body>
</html>