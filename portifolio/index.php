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

        $titulo = $saudacao . " Portfolio do " . $nome;

        $subtitulo = "Seja bem vindo ao seu Portfolio!!";

        $ano = 2020;

        $projeto="Meu Portfolio";

        $finalizado=false;

        $dataDoProjeto="2024-10-11";

        $descricao="Meu primeiro Portfolio. Escrito em PHP e HTML";

        $projetos = [
            [

                "titulo" => "Meu Portfolio",
                "finalizado" => true,
                "data" => "2024-10-11",
                "descricao" => "Controle de Leitura de Livros",
            ],
            [

                "titulo" => "Meu Portfolio",
                "finalizado" => false,
                "data" => "2024-05-11",
                "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
            ],
        ];

        function verificarSeEstaFinalizado($projeto){
            if( ! $projeto['finalizado'] ){
                        
                return '<span style="color: green;">Finalizado</span>';
            } 
            return '<span style="color: red;">Não Finalizado</span>';    
        }

    ?>

    <h1><?=$titulo?></h1>

    <p><?=$subtitulo?></p>

    <p><?=$ano?></p>

    <hr/>
    <ul>
        <?php foreach ($projetos as $projeto): ?>
            <?php if( ! ((2024 - $ano) > 2) ): ?>
                style="background-color: burlywood;"
            <?php endif; ?>
    
            <h2><?=$projeto['titulo']?></h2>
            <p><?=$projeto['descricao']?></p>
    
            <div>
                <div><?=$projeto['data']?></div>
    
                <div> Projeto:

                <!-- <?php verificarSeEstaFinalizado($projeto); ?> -->
                <?=verificarSeEstaFinalizado($projeto)?>

                <!-- <?php if( ! $projeto['finalizado']): ?>
                        
                        <span style="color: red;">Não Finalizado</span>
                        
                        <?php else: ?>
                            
                            <span style="color: green;">Finalizado</span>
                        
                    <?php endif;?> -->

                    <!-- <?php 
                        if( $projeto['finalizado'] ){
                            echo "Finalizado!";
                        } else {
                            echo "Não Finalizado!";
                        }
                    ?> -->
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </ul>

</body>
</html>