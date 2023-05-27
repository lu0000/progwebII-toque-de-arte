<?php
    require "../arrays.php";

    if(isset($_GET["i"])){
    $i = $_GET ["i"];
    $f = $produtos_bolsa[$i];
}else {
    header("location: bolsasechapeus.php");
    die;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comprar</title>
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
    <section id="comprar">
            <div class="comprarproduto">
                <div class="comprarimg">
                    <img src="<?=$f["foto"]?>">
                </div>
            </div>
            <div class="infor">
                <h1 class="tituloinfor"><?=$f["nome"]?></h1>
                <h3 class="precoinfor"><?=$f["preço"]?> 12x de sem juros</h3>
                <button class="botao" type="button">Comprar</button>
                <p class="descricao"><?=$f["descricao"]?><p>
            </div>
	</section>
    </main>

    <footer><!--Rodapé do Site-->
        <p>© 2023 Toque de Arte. Todos os direitos reservados</p>    
    </footer>

</body>
</html>
