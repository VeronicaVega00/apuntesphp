<?php
$accion = ["GTA", "COD", "PUGB"];
$aventura = ["ASSASINS", "CRASH", "PRICE OF"];
$deportes = ["FIFA 19", "PES 19", "MOTOGP19"];

$arrar = array(
    "accion" => $accion,
    "aventura" => $aventura,
    "deportes" => $deportes
);

echo "<table>";
echo "<thead>";
foreach ($arrar as $categoria => $juegos) {
    echo "<th>" . $categoria . "</th>";
}
echo "</thead>";
echo "<tbody>";

$max_num_juegos = max(array_map('count', $arrar)); // Obtener el número máximo de juegos en una categoría

for ($i = 0; $i < $max_num_juegos; $i++) {
    echo "<tr>";
    foreach ($arrar as $categoria => $juegos) {
        echo "<td>" . (isset($juegos[$i]) ? $juegos[$i] : "") . "</td>";
    }
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>