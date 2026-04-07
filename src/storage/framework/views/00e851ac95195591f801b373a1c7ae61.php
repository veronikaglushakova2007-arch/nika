<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Имя: <?php echo e($name); ?></p>
    <p>Возраст: <?php echo e($age); ?></p>
    <p>Зарплата: <?php echo e($salary); ?></p>

    <style>
        .red{color:red}
    </style>

    <p class='<?php echo e($classCSS); ?>'>красный текст</p>

    <input value="<?php echo e($var1); ?>">
    <input value="<?php echo e($var2); ?>">
    <input value="<?php echo e($var3); ?>">

    <p style='<?php echo e($greenText); ?>'>зеленый текст</p>

    <a href="<?php echo e($href); ?>"><?php echo e($text); ?></a>

    <p>Сегодня: <?php echo e(date('d.m.Y')); ?></p>

    <p>Имя: <?php echo e($arr['name']); ?></p>
    <p>Возраст: <?php echo e($arr['age']); ?></p>
    <p>Зарплата: <?php echo e($arr['salary']); ?></p>

    <p>В массиве <?php echo e(count($arr1)); ?> элемента(ов)</p>

    <p>Город: <?php echo e($city ?? 'Москва'); ?></p>

    <p>Страна: <?php echo e($location["country"] ?? "Россия"); ?></p>
    <p>Город: <?php echo e($location["city"] ?? "Москва"); ?></p>

    <p>Год: <?php echo e($year ?? date('Y')); ?></p>
    <p>Месяц: <?php echo e($month ?? date('m')); ?></p>
    <p>День: <?php echo e($day ?? date('d')); ?></p>

    <p>Обычный вывод: <?php echo e($str); ?></p>
    <p>Теги выполнились: <?php echo $str; ?></p> 

    
    <!-- видимый комментарий -->

    <?php if($userAge > 18): ?>
        <p>старше 18</p>
    <?php elseif($userAge==18): ?>
        <p>ровно 18</p>
    <?php else: ?>
        <p>младше 18</p>
    <?php endif; ?>

    <?php if (! ($userAge>=18)): ?>
        <p>несовершеннолетний</p>
    <?php endif; ?>    

    <?php if(count($numbers)>0): ?>
        <p>сумма элементов: <?php echo e(array_sum($numbers)); ?></p>
    <?php else: ?>
        <p>массив пуст</p>
    <?php endif; ?>

    <ul>
        <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($num); ?> в квадрате = <?php echo e($num*$num); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <ul>
        <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>квадратный корень <?php echo e($num); ?> = <?php echo e(sqrt($num)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    
    <ul>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($key+1); ?> => <?php echo e($value); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <ul>
        <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($num%2==0): ?>
                <li><?php echo e($num); ?> - четное</li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php if(is_array($data)): ?>
        <ul>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>  
        <p><?php echo e($data); ?></p>
    <?php endif; ?>

    <table border="1">
        <?php $__currentLoopData = $matrix; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($cell); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <ul>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($worker['name']); ?> <?php echo e($worker['surname']); ?> - <?php echo e($worker['salary']); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($worker['name']); ?></td>
                <td><?php echo e($worker['surname']); ?></td>
                <td><?php echo e($worker['salary']); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php if(count($names) > 0): ?>
        <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($name); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>Нет элементов</p>
    <?php endif; ?>

    <ul>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($loop->index); ?>: <?php echo e($elem); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <ul>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($loop->iteration); ?>: <?php echo e($elem); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <style>
        .first { color: pink; }
        .last { color: blue;}
    </style>
    <ul>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li 
                <?php if($loop->first): ?> class="first" <?php endif; ?>
                <?php if($loop->last): ?> class="last" <?php endif; ?>
            >
                <?php echo e($elem); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->remaining < 3): ?>
            <i><?php echo e($num); ?></i>
        <?php else: ?>
            <b><?php echo e($num); ?></b>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <br>
    <?php $__currentLoopData = $numbersZero; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($num); ?>

        <?php if($num == 0) break; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <ul>
        <?php $__currentLoopData = $numbersZero; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($num == 0) continue; ?>
            <li><?php echo e($num); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php for($i = 1; $i <= 10; $i++): ?>
        <p><?php echo e($i); ?></p>
    <?php endfor; ?>

</body>
</html>
<?php /**PATH /var/www/resources/views/test.blade.php ENDPATH**/ ?>