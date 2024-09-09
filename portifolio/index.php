<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Protfolio</title>
</head>
<body>
    <?php 
        $nome = "Aluno";

        $saudacao = "Oi";

        $titulo = $saudacao . " Portfolio " . $nome;

        $subtitulo = "Seja bem vindo ao seu portifolio!!";

        $ano = 2020;

        $projeto="Meu Portifolio";

        $finalizado=false;

        $dataDoProjeto="2024-10-11";

        $descricao="Meu primeiro portifolio. Escrito em PHP e HTML";
    ?>

    <h1><?=$titulo?></h1>

    <p><?=$subtitulo?></p>

    <p><?=$ano?></p>

    <hr/>

    <div 

        <?php if( ! ((2024 - $ano) > 2) ): ?>
            style="background-color: burlywood;"
        <?php endif; ?>
    >

        <h2><?=$projeto?></h2>
        <p><?=$descricao?></p>

        <div>
            <div><?=$dataDoProjeto?></div>

            <div> Projeto:

                <?php if( ! $finalizado): ?>
                    
                    <span style="color: red;">Não Finalizado</span>
                    
                    <?php else: ?>
                        
                        <span style="color: green;">Finalizado</span>
                    
                <?php endif;?>


                <?php 
                    if( $finalizado ){
                        echo "Finalizado!";
                    } else {
                        echo "Não Finalizado!";
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>