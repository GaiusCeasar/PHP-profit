<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Урок №2</title>
</head>
<body>

<h1 align="center">Ответы на урок №2</h1>
<h2>Задание №1</h2>

<table border="1" width="25%">
    <tr>
        <td align="center" width="5%"> a </td>
        <td align="center" width="5%"> b </td>
        <td align="center" width="5%"> && </td>
        <td align="center" width="5%"> || </td>
        <td align="center" width="5%"> xor </td>
    </tr>
    <tr>
        <td align="center" width="5%"><?php $a = false; echo (int)$a; ?></td>
        <td align="center" width="5%"><?php $b = false; echo (int)$b; ?></td>
        <td align="center" width="5%"><?php echo (int)($a && $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a || $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a xor $b); ?></td>
    </tr>
    <tr>
        <td align="center" width="5%"><?php $a = true; echo (int)$a; ?></td>
        <td align="center" width="5%"><?php $b = false; echo (int)$b; ?></td>
        <td align="center" width="5%"><?php echo (int)($a && $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a || $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a xor $b); ?></td>
    </tr>
    <tr>
        <td align="center" width="5%"><?php $a = false; echo (int)$a; ?></td>
        <td align="center" width="5%"><?php $b = true; echo (int)$b; ?></td>
        <td align="center" width="5%"><?php echo (int)($a && $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a || $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a xor $b); ?></td>
    </tr>
    <tr>
        <td align="center" width="5%"><?php $a = true; echo (int)$a; ?></td>
        <td align="center" width="5%"><?php $b = true; echo (int)$b; ?></td>
        <td align="center" width="5%"><?php echo (int)($a && $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a || $b); ?></td>
        <td align="center" width="5%"><?php echo (int)($a xor $b); ?></td>
    </tr>
</table>

<h2>Задание №2</h2>
<h3>Алгоритм решения квадратного уравнения</h3>

1. Раскрыть скобки, перенести все слагаемые в левую часть, чтобы уравнение приобрело вид:
<p>ax <sup><small>2</small></sup> + bx + c = 0</p>

2. Выписать, чему равны в числах коэффициенты:

    <?php

    $a = 30;
    $b = 10;
    $c = 1;

    ?>

<p>
    a =  <?php echo $a ?><br>
    b = <?php echo $b ?><br>
    c = <?php echo $c ?><br>
</p>

3. Вычислить дискриминант:
<div>

    <p>D =
        <i>b <sup><small>2</small></sup> - 4ac</i> =
        <i> <?php echo $b ?> <sup><small>2</small></sup> - 4*<?php echo $a ?>*<?php echo $c ?> </i> =
        <?php
        require __DIR__ . '/functions.php';
        echo $discr = discriminant($a, $b, $c);
        // D > 0
        assert(81 == discriminant(4,7,-2));
        // D == 0
        assert(0 == discriminant(25,10,1));
        // D < 0
        assert(-20 == discriminant(30,10,1));
?>
    </p>
</div>
4. Решить уравнение:
<p></p>
<div>

    <?php
    if ($discr > 0) { ?>

        <p>так как Дисриминант > 0, будет два различных корня, которые находятся по формуле:</p>
        <p><i>x <sub><small>1,2</small></sub> = (-b ± √D)/(2a)</i></p>
        <p><i>x <sub><small>1</small></sub> = (-b + √D)/(2a)</i> =
            (<?php echo -$b; ?> + √<?php echo $discr; ?>)/(2*<?php echo $a; ?>) =
            <?php echo (-$b + sqrt($discr))/(2*$a); ?>
        </p>
        <p><i>x <sub><small>2</small></sub> = (-b - √D)/(2a)</i> =
            (<?php echo -$b; ?> - √<?php echo $discr; ?>)/(2*<?php echo $a; ?>) =
            <?php echo (-$b - sqrt($discr))/(2*$a); ?>
        </p>

    <?php } elseif ($discr == 0) { ?>
        <p>так как Дисриминант = 0, будет один корень, который находится по формуле:</p>
        <p>x = -b/(2a) =
            <?php echo -$b; ?>/(2*<?php echo $a; ?>) =
            <?php echo -$b/(2*$a); ?>
        </p>

    <?php } elseif ($discr < 0) { ?>
        <p> так как Дисриминант < 0, то решений нет</p>
        <?php ;}
    ?>

</div>


<h2>Задание №3</h2>

<?php
// ДУмаю, что если файл подключен успешно, то результатом выполнения будет int(1),
// а если не успешно то bool(false) + Warning

var_dump(include __DIR__.'/inc1.php');
var_dump(include __DIR__.'/inc2.php');
var_dump(include __DIR__.'/inc3.php');
var_dump(include __DIR__.'/inc4.php'); // bool(false) + Warning
?>

<h2>Задание №4</h2>

<?php
phpinfo();
?>

</body>
</html>