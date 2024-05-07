<?php
  $age = $_GET['age']; // Получение значения возраста из параметра запроса
  $name = $_GET['name']; // Получение значения имени из параметра запроса
  echo "список пассажиров<br>";

  $file = 'titanic.csv';
  $num = 8;

  if (($handle = fopen($file, "r")) !== FALSE) {
    fgetcsv($handle); // Пропуск первой строки - заголовков

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      // Проверка, соответствуют ли имя и возраст заданным значениям
      if (($name === null || $data[4] == $age)) {
        echo $data[0] == 1 ? "Survived " : "Didnt Survive ";
        for ($c = 1; $c < $num; $c++) {
          echo $data[$c] . " ";
        }
        echo "<br>";
      }
    }

    fclose($handle);
  }
?>