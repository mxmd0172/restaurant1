 <header class="header">
        <div class="logo">
            <img src="../img/logo.png" alt="Logo">
        </div>
        <nav aria-label="Main Navigation" class="nav">
            <ul>
                <li><a href="../php/index.php" aria-label="Home">home</a></li>
                <li><a href="../php/reserveren.php" aria-label="Reserve a table">reserveren</a></li>
                <li><a href="../php/openingstijden.php" aria-label="Opening hours">openingstijden</a></li>
                <li><a href="../php/vacatures.php" aria-label="Job openings">vacatures</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
    </header>
    
<script>function toggleMenu() {
        const nav = document.querySelector('.nav ul');
        nav.classList.toggle('active'); 
    }
</script>
 