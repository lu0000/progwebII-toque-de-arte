<?php
    require "arrays.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>

    <header><!--Cabeça do Site-->
        <div class="logo">
            <a href="index.php"><img src="imagens/logo/logo1-remove.png" alt="logo"></a>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="paginas/categorias.html">Categorias</a></li>
                <li><a href="paginas/grupo.html">Grupo</a></li>
                <li><a href="paginas/cadastro.html">Cadastrar</a></li>
                <li><a href="paginas/login.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <main><!--Corpo do Site-->
 
        <section id="banner"><!--Banner-->
            <img src="imagens/banner.gif" alt="banner">
        </section>

        <section id="favoritos"><!--Categorias em Destaques-->
            
            <div class="fav2">
                <div class="favimg"><a href="paginas/ceramica.php"><img src="imagens/ceramica/ceramica.jpg" alt="ceramica"></a></div>
                <div class="favh1"><h1><a>Cerâmica</a></h1></div>
            </div>
            <div class="fav2">
                <div class="favimg"><a href="paginas/bijuterias.php"><img src="imagens/bijuterias/bijuteria.jpg" alt="ceramica"></a></div>
                <div class="favh1"><h1><a>Bijuteria</a></h1></div>
            </div>
            <div class="fav2">
                <div class="favimg"><a href="paginas/pinturas.php"><img src="imagens/pinturas/pintura.jpg" alt="ceramica"></a></div>
                <div class="favh1"><h1><a>Pinturas</a></h1></div>
            </div>
            <div class="fav2">
                <div class="favimg"><a href="paginas/tecidos.php"><img src="imagens/tecidos/tecido.jpg" alt="ceramica"></a></div>
                <div class="favh1"><h1><a>Tecidos</a></h1></div>
            </div>
            <div class="fav2">
                <div class="favimg"><a href="paginas/bolsasechapeus.php"><img src="imagens/bolsas/bolsa.jpg" alt="ceramica"></a></div>
                <div class="favh1"><h1><a>Bolsas/Chapéus</a></h1></div>
            </div>
            <div class="fav2">
                <div class="favimg"><a href="paginas/bonecos.php"><img src="imagens/bonecos/boneco.jpg" alt="ceramica"></a></div>
                <div class="favh1"><h1><a>Bonecos</a></h1></div>
            </div>
            
        </section>
        
        <section class="secao"><!--Mais Procurados-->
            <h1 class="titulo">Destaques</h1>
            <div class="secaoimg"><a href="https://www.instagram.com/toquedearte2023/"><img src="imagens/secoes/banneri.jpeg"></a></div>
            <div class="pro1">
                <?php
                    foreach($destaque as $i => $f){
                ?>                     
                <div class="pro2">
                    <a href="paginas/comprardestaques.php?i=<?=$i?>">
                        <div class="pro3">
                            <img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
                        </div>
                        <div class="pro4">
                            <p><?=$f["nome"]?></p>
                            <h1>Preço: <?=$f["preco"]?></h1>
                        </div>
                    </a>
                </div>
                <?php
                    }
                ?>
            </div>
            
        </section>

        <section class="secao"><!--Promoções-->
            <h1 class="titulo">Promoções</h1>
            <div class="secaoimg"><img src="imagens/secoes/banner.jpeg"></div>
            <div class="pro1">
                <?php
                    foreach($promocoes as $i => $f){
                ?>                     
                <div class="pro2">
                    <a href="paginas/comprarpromocoes.php?i=<?=$i?>">
                        <div class="pro3">
                            <img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
                        </div>
                        <div class="pro4">
                            <p><?=$f["nome"]?></p>
                            <p><s><?=$f["preco_antigo"]?></s>.</p>
                            <h1>Preço: <?=$f["preco_novo"]?></h1>
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
