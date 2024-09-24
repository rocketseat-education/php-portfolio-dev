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

//        $livros = [
//            ['nome'=> 'Senhor dos Aneis'],
//            ['nome'=> 'Harry Potter']
//        ];

        $projetos = [
            [
                "titulo" => "Meu Portfolio 1",
                "finalizado" => true,
                "ano" => 2022,
                "descricao" => "Controle de Leitura de Livros",
            ],
            [
                "titulo" => "Meu Portfolio 2",
                "finalizado" => false,
                "ano" => 2022,
                "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
            ],
            [
                "titulo" => "Meu Portfolio 3",
                "finalizado" => true,
                "ano" => 2024,
                "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
            ],
            [
                "titulo" => "Meu Portfolio 4",
                "finalizado" => false,
                "ano" => 2025,
                "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
            ],
        ];

        function verificarSeEstaFinalizado($projeto){
            if( ! $projeto['finalizado'] ){

                return '<span style="color: green;">Finalizado</span>';
            }
            return '<span style="color: red;">Não Finalizado</span>';
        }

        function filtrarProjetos($listaDeProjetos, $finalizado = null){
            if (is_null($finalizado)){
                return $listaDeProjetos;
            }

            $filtrados = [];

            foreach ($listaDeProjetos as $projeto) {
                if($projeto['finalizado'] === $finalizado){
                    $filtrados [] = $projeto;
                }
            }
            return $filtrados;
        };

    function filtro($itens, $funcao) {
        $filtrados = []; // Array para armazenar os itens filtrados

        foreach ($itens as $item) { // Itera sobre cada item no array
            if ($funcao($item)) { // Aplica a função de callback ao item
                $filtrados [] = $item; // Se a função retornar verdadeiro, adiciona ao array filtrado
            }
        }
        return $filtrados; // Retorna o array com os itens filtrados
    }

    // Filtrando os projetos para aqueles com ano menor que 2024
    $projetoFiltrados = filtro($projetos, function ($projeto) {
        return $projeto['ano'] < 2024;
//        return $projeto['ano'] === 2024 || $projeto['ano'] === 2022;   // Condição de filtragem
    });

    ?>

    <h1><?=$titulo?></h1>

    <p><?=$subtitulo?></p>

    <p><?=$ano?></p>

<!--    <hr/>-->
<!---->
<!--    <ul>-->
<!--        --><?php //foreach (filtro($livros, 'nome', 'Harry Potter') as $livro): ?>
<!--        <li>--><?php //=$livro['nome']?><!--</li>-->
<!--        --><?php //endforeach;?>
<!--    </ul>-->

    <hr/>

    <ul>
        <?php foreach ($projetoFiltrados as $projeto): ?>
            <?php if( ! ((2024 - $ano) > 2) ): ?>
                style="background-color: burlywood;"
            <?php endif; ?>
    
            <h2><?=$projeto['titulo']?></h2>
            <p><?=$projeto['descricao']?></p>

            <div>
                <div><?=$projeto['ano']?></div>
    
                <div> Projeto:

                <!-- <?php verificarSeEstaFinalizado($projeto); ?> -->
                <?=verificarSeEstaFinalizado($projeto)?>

                <!-- <?php if( ! $projeto['finalizado']): ?>
                        
                        <span style="color: red;">Não Finalizado</span>
                        
                        <?php else: ?>
                            
                            <span style="color: green;">Finalizado</span>
                        
                    <?php endif;?> -->

                    <?php
                        if( $projeto['finalizado'] ){
                            echo "Finalizado!";
                        } else {
                            echo "Não Finalizado!";
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </ul>

</body>
</html>