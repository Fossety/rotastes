<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas Carajás</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo-box">
            <img src="logo parvi.png" alt="Logo da Empresa">
        </div>
        <h1>ROTAS CARAJÁS</h1>
    </header>
    <main>
        <section id="botoes">
            <h2>Rotas TCs</h2>
            <div class="botoes-container">
                <?php
                $tcRoutes = [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 29, 30, 31, 33, 34];
                foreach ($tcRoutes as $route) {
                    $link = ($route == 3) ? "tc03/tc03.html" : "#";
                    echo "<a href=\"$link\"><button>TC-$route</button></a>";
                }
                ?>
            </div>
        </section>
        
        <section id="minas">
            <h2>Rotas minas de N5 e N4</h2>
            <div class="botoes-container">
                <?php
                $n5Routes = [1, 2, 3, 5, 6];
                foreach ($n5Routes as $route) {
                    echo "<a href=\"#\"><button>N5-$route</button></a>";
                }
                ?>
            </div>
        </section>
        
        <section id="minas">
            <div class="botoes-container">
                <?php
                $n4Routes = [1, 4, 5, 6, 7, 8];
                foreach ($n4Routes as $route) {
                    echo "<a href=\"#\"><button>N4-$route</button></a>";
                }
                ?>
            </div>
        </section>
        
        <section id="tsl">
            <h2>Rotas TSLs</h2>
            <div class="botoes-container">
                <?php
                $tslRoutes = [1, 2, 3, 4, 5, 6];
                foreach ($tslRoutes as $route) {
                    echo "<a href=\"#\"><button>TSL-$route</button></a>";
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
    </footer>
</body>
</html>