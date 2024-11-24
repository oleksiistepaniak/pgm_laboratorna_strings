<?php
require_once 'TextFormatter.php';

$studentInfo = [
    'number' => 5,
    'topic' => 'Робота з рядками в мові PHP',
    'date' => '24.11.2024',
    'name' => 'Степаняк Олексій Іванович',
    'group' => 'КН-М924б',
    'variant' => '11',
];
$task = "Реалізувати форматування тексту так, щоб довжина рядка не перевищувала 20 символів, а слова були рівномірно розташовані.";

$formattedTask = TextFormatter::formatText($task, 20);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1, h2 {
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
        .formatted-task {
            font-family: 'Courier New', Courier, monospace;
            white-space: pre-wrap;
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<h1>Лабораторна робота №<?= $studentInfo['number'] ?></h1>
<h2><?= $studentInfo['topic'] ?></h2>
<div class="info">
    <p><strong>Дата виконання:</strong> <?= $studentInfo['date'] ?></p>
    <p><strong>ПІБ студента:</strong> <?= $studentInfo['name'] ?></p>
    <p><strong>Група:</strong> <?= $studentInfo['group'] ?></p>
    <p><strong>Варіант завдання:</strong> <?= $studentInfo['variant']?></p>
</div>
<div class="task">
    <h3>Індивідуальне завдання:</h3>
    <p><?= $task ?></p>
</div>
<div class="formatted-task">
    <?= $formattedTask ?>
</div>
</body>
</html>
