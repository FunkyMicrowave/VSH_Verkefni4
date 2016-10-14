
<?php
$kallar = ['batman',
           'superman',
           'wonderwoman',
           'flash',
           'aquaman',
           'greenlantern',
           'martianmanhunter',
           'greenarrow',
           'shazam',
           'atom',
           'cyborg',
           'hawkgirl',
           'alfred',
           'amandawaller',
           'amethyst',
           'antimonitor',
           'ares'];
    for ($i = 1; $i <= count($kallar); $i++) {
        $name = $kallar[$i - 1];
        $nameS = ucfirst($name);
        $image = "images/" . $name . ".jpg"; ?>
        <a href='Characters/<?php echo "{$nameS}"; ?>.html'>
                    <div style='background: url(<?php echo "{$image}"; ?>); background-size: 100%;' class='characters' id='<?php echo "{$name}"; ?>'>
                        <img src=''>
                        <p>
                            <?php echo "{$nameS}"; ?>
                        </p>
                    </div>
                </a>
    <?php }?>