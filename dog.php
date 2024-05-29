<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Договора</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
 
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
    <div class="holder">
        <header class="header">
            <img class="himg" alt="Полезные советы" src="img/318e64d0dd79de48cee83b17faefe8ae.png" />
        </header>
        <div style="padding-left: 2%; background-color: white; ">
            <?php
            $dir = $_SERVER['DOCUMENT_ROOT'].'/biz/dog';
            //echo $dir;
            $example = scandir($dir);
            //print_r ($example);
            echo ('<ul>');
            foreach ($example as $value) {
                if ($value != '.' && $value != '..'){
                //echo "Значение: $value<br />\n";
                echo '<li>';
                echo '<a download href="';
                echo $value;
                echo '">';
                echo $value;                
                echo '</a></li>';
            }
            }

            echo ('</ul>');
            ?>

        </div>
        <footer class="footer">
            <p class="p1 yellowtail-regular"> concept: <a href="mailto:robousta@gmail.com">robousta@gmail.com</a> </p>
            <p class = "p2 yellowtail-regular">webmaster: <a href="mailto:rav3niv@gmail.com">rav3niv@gmail.com</a></p>
         </footer>
    </div>
</body>
</html>