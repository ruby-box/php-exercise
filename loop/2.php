<html>
    <body>
        <?php
            $i = 1;
            while($i <= 10){
                echo "coding ".($i*2)."<br/>";
                $i++;
            }

            for($i = 0; $i < 10; $i++){
                if($i === 5){
                    break;
                }
                echo "hi {$i}<br/>";
            }
        ?>
    </body>
</html>