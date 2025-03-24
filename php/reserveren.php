<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <link rel="stylesheet" href="../css/main.css">
    <script href="../js/java.js"></script>
</head>
<body>
    <?php 
    include 'header.php';
    ?>
    <p>lol</p>  
    <main>
        <section class="reserveren">
            <h1>Reserveer een Tafel</h1>
            <form action="#" method="POST" class="reserveren-form">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" placeholder="Uw naam" required>

                <label for="date">Datum en Tijd:</label>
                <input type="datetime-local" id="date" name="date" required>

                <label for="people">Aantal Personen:</label>
                <input type="number" id="people" name="people" min="1" max="20" placeholder="Aantal personen" required>

                <button type="submit">Reserveren</button>
            </form>
        </section>
    </main>
    <?php 
    include 'footer.php'; 
    ?>
    

</body>
</html>