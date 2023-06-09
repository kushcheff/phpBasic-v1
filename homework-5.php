<?php

//У вас є масив вакансій, в кожній вакансії є sector_id, який вказує до якого сектору вакансія відноситься в масиві секторів.
// Треба вивести масив вакансій де буде додано елемент масиву sector_name в якому буде назва сектору. (Вирішували схожу задачу на
// занятті. Тільки ми там ще видаляли одне поле, тут цього робити не треба). Ось масиви:


$vacancies = [
    0 => ['id' => 1, 'title' => 'PHP Programmer', 'salary' => 2500, 'sector_id' => 1],
    1 => ['id' => 2, 'title' => 'Designer', 'salary' => 3000, 'sector_id' => 1],
    2 => ['id' => 3, 'title' => 'Finance Manager', 'salary' => 3500, 'sector_id' => 2],
    3 => ['id' => 4, 'title' => 'Finance Director', 'salary' => 3500, 'sector_id' => 2],
];

$sectors = [
    0 => ['id' => 1, 'title' => 'IT'],
    1 => ['id' => 2, 'title' => 'Finance']
];




$fullVacancies = [];


foreach ($vacancies as $key => $vacancy) {
    foreach ($sectors as $sector) {
        if ($vacancy['sector_id'] === $sector['id']) {
            $vacancy['sector_id_title'] = $sector['title'];
            $fullVacancies[] = $vacancy;
            continue 2;
        }
    }
}
echo "<pre>";
print_r($fullVacancies);
echo "<pre>";


$data = $fullVacancies;

?>

<?php if (count($data) > 0): ?>
<link rel='stylesheet' href='css/style.css'>
<table border="1">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($data))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $row): $row; ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

<?php endif; ?>
