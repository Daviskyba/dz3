<?php
for($a=1;$a<=100;$a++)
{
    if($a==50)
    {
        continue;//оператор continue убирает указанное число из цикла.
    }
    echo($a . PHP_EOL);
}
?>
