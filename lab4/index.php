<!DOCTYPE html>
<html>
<head>
    <title>PHP basics</title>
    <meta charset="utf-8">
</head>
<body>
<h3>Лабораторна робота №4</h3>
<h4>Базовий синтаксис мови PHP</h4>

<h5>
    Вивід інформації:
    <p>
        echo:
    <?php
        echo "Привіт світ!";
    ?>
    </p>
        print:
        <?php
        print 1234;
        ?>
    <p>
        short-tag-form:
        <?= 2+2?>
    </p>
    <p>
        json_encode(arr):
        <?php
          $arr = array("a", "b", "c");
          echo json_encode($arr);
        ?>
    </p>
    <p>
        print_r
        <?= print_r(array("d", "e", "f"))?>
    </p>
    <p>
        var_dump
        <?= var_dump([1,2])?>
    </p>
    <p>
        var_export:
        <?php
            $array = array ('a'=>"apple",'p'=>"pear","k" =>array ('key', 'kiwi'));
            var_export($array);
        ?>
    </>
</h5>

<h4>
    Рядки
</h4>
<?php
$greeting = 'Hello world!';
$goodbye = 'Bye Bye, dear';
?>
<h5><?php print ('Greeting phase:'. " " . $greeting); ?> </h5>
<h5><?php print ('Goodbye phase:'. " " .$goodbye); ?> </h5>
<h5><?= 'greeting length:' . " " . strlen($greeting); ?> </h5>
<h5><?= 'reversed greeting:' . " " . strrev($greeting); ?> </h5>
<h5><?= 'position of coma in goodbye phrase:' . " " .strpos($goodbye, ','); ?> </h5>
<h5><?= 'goodbye phase with replaced world:' . " "
    . str_replace('dear', 'not dear', $goodbye); ?> </h5>

<h4>
    Цикли
</h4>
<?php
    $temp_greeting = 'hello!'
?>
<h5>
    Цикл while:
    <?php
        $i = 0;
        $word_count = strlen($temp_greeting);
        while ($i != $word_count) {
            print ($temp_greeting[$i] . " ");
            $i++;
        }
    ?>
</h5>

<h5>
    Цикл for:
    <?php
    for ($i = 0; $i < strlen($temp_greeting); $i++){
        print ($temp_greeting[$i] . " ");
    }
    ?>
</h5>

<h5>
    Цикл foreach:
    <?php
    $arr = array("one", "two");
    foreach ($arr as $item){
        print ($item . " ");
    }
    ?>
</h5>

<h4>
    Функціїї
</h4>
<h5>
    Функція факторіал числа
    <?php

    echo "факторіал числа 3" . " " .factorial(3) . "     ";
    echo "факторіал числа 10" . " " .factorial(10) . "     ";

    function factorial($number) {

        if ($number < 2) {
            return 1;
        } else {
            return ($number * factorial($number-1));
        }
    }
    ?>
</h5>

<h4>
    Застосування класів
</h4>
<h5>

</h5>
<?php
require_once 'Vehicle.php';
require_once 'Motorbike.php';
    $greenBike = new Motorbike('Honda', 'Green');
    $greenBike->ride();
?>
<h5>
    Test singleton:
<?php
require_once 'Singleton.php';
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}
?>
</h5>

</body>
</html>