<?php
    require "../arrays.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bonecos</title>
    <link href="../estilo.css" rel="stylesheet">
</head>
<body>

    <header><!--Cabeça do Site-->
        <div class="logo">
            <a href="../index.php"><img src="../imagens/logo/logo1-remove.png" alt="logo"></a>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="categorias.html">Categorias</a></li>
                <li><a href="grupo.html">Grupo</a></li>
                <li><a href="cadastro.html">Cadastrar</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <main><!--Corpo do Site-->
    <section class="secao">
            <h1 class="titulo-paginas">Produtos da categoria Bonecos:</h1>
            <div class="pro1">
                <?php
                    foreach($produtos_bonecos as $i => $f){
                ?>                     
                <div class="pro2">
                    <a class="proaa" href="comprarbonecos.php?i=<?=$i?>">
                        <div class="pro3">
                            <img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
                        </div>
                        <div class="pro4">
                            <p><?=$f["nome"]?></p>
                            <h1>Preço: <?=$f["preço"]?></h1>
                        </div>
                    </a>
                </div>
                <?php
                    }
                ?>
            </div>
    </section>
    </main>

    <footer><!--Rodapé do Site-->
        <p>© 2023 Toque de Arte. Todos os direitos reservados</p>
    </footer>

</body>
</html>
