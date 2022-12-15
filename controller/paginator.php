<?php

$db = require __DIR__ . '/connect.php';
$data = $db->query('SELECT * FROM city')->fetchAll(PDO::FETCH_ASSOC);
$total = count($data);
$perPage = 10;
$countOfPages = ceil($total / $perPage);

$page = $_GET['page'] ?? 1;
$page = (int)$page;


if ($page < 1) {
    $page = 1;
} elseif ($page > $countOfPages) {
    $page = $countOfPages;
}

$start = ($page - 1) * $perPage;
$end = $start + $perPage;

$limitData = $db->query("SELECT * FROM city LIMIT $start,$perPage ")->fetchAll(PDO::FETCH_ASSOC);

echo "  <table>     <tr>
                        <td>Name of book</td>
                        <td>Authors</td>
                        <td>Year</td>
                   
                    </tr>";
foreach ($limitData as $limitDatum) {
    echo "
           <tr>
                        <td>{$limitDatum['Name']}</td>
                        <td>{$limitDatum['District']}</td>
                        <td>{$limitDatum['Population']}</td>
                 
                    </tr>    ";

}
"</tbale>";
for ($i = 1; $i <= 10; $i++) {
    echo "<button> <a href='?page={$i}'>$i</a></button>";
}