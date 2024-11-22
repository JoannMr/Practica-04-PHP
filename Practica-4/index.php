<?php
// TAREA 1

echo "<h2>TAREA 1</h2>";

// Función calculadora
function calculadora($num1, $num2, $operacio) {
    switch ($operacio) {
        case '+':
            return $num1 + $num2;  // Suma
        case '-':
            return $num1 - $num2;  // Resta
        case '*':
            return $num1 * $num2;  // Multi
        case '/':
            if ($num2 == 0) {
                return "Error: No es pot dividir per zero.";  
            } else {
                return $num1 / $num2;  // Dividir
            }
        default:
            return "Operació no vàlida.";
    }
}

// SUMA
echo "10 + 5 = " . calculadora(10, 5, '+'); 
echo "<br>";

// DIVISIO
echo "10 / 0 = " . calculadora(10, 0, '/'); 
echo "<br>";

// MULTIPLICACIO
echo "6 * 3 = " . calculadora(6, 3, '*');
echo "<br>";

// RESTA
echo "15 - 7 = " . calculadora(15, 7, '-');

echo "<br>";

// TAREA 2

echo "<h2>TAREA 2</h2>";

// Funció estadístiques
function estadistiques($array) {
    // Calculem les estadistiques
    $suma = array_sum($array);  // Suma 
    $maximo = max($array);      // Máxim
    $minimo = min($array);      // Mínim
    $mitjana = $suma / count($array);  // Mitjana

    // Nou array
    return [
        "suma" => $suma,
        "maximo" => $maximo,
        "minimo" => $minimo,
        "mitjana" => $mitjana
    ];
}

// Array d'exemple
$numeros = [10, 12, 20, 5, 15, 7, 25, 30];

// Printem
$resultado = estadistiques($numeros);

echo "<br>";

// Resultats amb HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Estadística</th><th>Valor</th></tr>";
echo "<tr><td>Suma</td><td>" . $resultado['suma'] . "</td></tr>";
echo "<tr><td>Valor Màxim</td><td>" . $resultado['maximo'] . "</td></tr>";
echo "<tr><td>Valor Mínim</td><td>" . $resultado['minimo'] . "</td></tr>";
echo "<tr><td>Mitjana</td><td>" . $resultado['mitjana'] . "</td></tr>";
echo "</table>";

echo "<br>";

// TAREA 3

echo "<h2>TAREA 3</h2>";

// Funcions
function salutacio() {
    return "Hola! Benvingut al nostre lloc web.";
}

function dataActual() {
    return "Data i hora actual: " . date("Y-m-d H:i");
}

function randomNumber() {
    return "Número aleatori: " . rand(1, 100);
}

// Array de les funcions
$accions = ["salutacio", "dataActual", "randomNumber", "funcioInexistent"];

// Executem las funciones dinámicamente
foreach ($accions as $accio) {
    echo "<strong>Acció triada:</strong> $accio<br>";
    if (function_exists($accio)) {
        echo "<strong>Resultat:</strong> " . $accio() . "<br><br>";
    } else {
        echo "<strong>Error:</strong> Acció no vàlida.<br><br>";
    }
}
?>




