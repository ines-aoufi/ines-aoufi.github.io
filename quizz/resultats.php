<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Quizz genshin</title>
    <link rel="icon" type="image/x-icon" href="assets/images/elynas_lol.png">

    <!-- Lien vers la page CSS -->
    <link rel="stylesheet" href="assets/style/style.css">
    
</head>

<body>
    <header>
        <nav>
            <div><a href="index.php"><img src="assets/images/elynas_lol.png" alt="logo" class="img_logo"></a></div>
        </nav>
    </header>
    <section id="hero" class="container">
        <h2>Ton élément est</h2>
        <h2 id="elementPlaceholder">placeholder element</h2> <!-- je mets un texte placeholder pour ensuite mettre l'élément à la place de celui ci, je lui donne aussi l'id placeholder -->
        <div class="flex-container"><a href="index.php" id="restart" class="buttons">Recommencer le quizz</a></div>
    </section>

    <footer>
        <p>
            Créée par Inès AOUFI
        </p>
    </footer>

    <script src="assets/JS/resultats.js"></script>
    <script>
        elementPlaceholder.textContent = newElement; // permet de mettre l'élément calculé dans resultats.js à la place du placeholder
        elementPlaceholder.style.visibility = 'visible';
    </script>

</body>
</html>

<?php
// Function to read data from the CSV file
function readCSV($file) {
    $data = array();
    $file = fopen($file, 'r');
    while (($line = fgetcsv($file, 1000, ';'))!== false) {
        $data[] = $line;
    }
    fclose($file);
    return $data;
}

// Function to write data to the CSV file
function writeCSV($file, $data) {
    $file = fopen($file, 'w');
    foreach ($data as $line) {
        fputcsv($file, $line, ';');
    }
    fclose($file);
}

// Code PHP qui permet de mettre l'élément de la personne dans le fichier CSV
// on récupère la variable JS
$elementTransfer = $_POST['elementTransfer'];

// Read the CSV file into an array
$data = readCSV('assets/elementsResults.csv');

// Find the row and column that correspond to the variable
$row = array_search($elementTransfer, array_column($data, 0));
if ($row!== false) {
    $column = 1; // Set the column to the second column
}

// Set the corresponding data in the row to the current count plus one
if (isset($column)) {
    $data[$row][$column] = isset($data[$row][$column])? $data[$row][$column] + 1 : 1;
}

// Write the updated data back to the CSV file
writeCSV('assets/elementsResults.csv', $data);
?>



<?php // code qui permet d'afficher les données du fichier
$data = readCSV('assets/elementsResults.csv');

// Initialize an array to store the data
$counts = [];

// Initialize a variable to store the total count
$total = 0;

// Loop through each row in the CSV file
foreach ($data as $row) { //checks if we're not at the end of the file yet
    // Get the element at index 0 (the name of the element) and the count at index 1
    $element = $row[0];
    $count = (int)$row[1];

    // If the element is not set in the counts array, set it to 0
    if (!isset($counts[$element])) {
        $counts[$element] = 0;
    }

    // Increment the count for this element
    $counts[$element] += $count;

    // Increment the total count
    $total += $count;
}

// Calculate the percentages
function calculatePercentages($counts, $total) {
    if ($total == 0) {
        return [];
    }
    $percentages = [];
    foreach ($counts as $element => $count) {
        $percentages[$element] = round(($count / $total) * 100);
    }
    return $percentages;
}

$percentages = calculatePercentages($counts, $total);
// Print the percentages in a table
echo "<table>\n";
echo "<tr><th>Éléments</th><th>Pourcentage de résultats</th></tr>\n";
foreach ($percentages as $element => $percentage) {
    echo "<tr><td>$element</td><td>$percentage%</td></tr>\n";
}
echo "</table>\n";
?>