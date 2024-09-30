<?php
$projetos =[
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "ano" => 2021,
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS",],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "ano" => 2021,
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS",],
        "img" => ""
    ],
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => true,
        "ano" => 2021,
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS",],
        "img" => ""
    ],
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "ano" => 2021,
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS",],
        "img" => ""
    ],
];
?>

<?php foreach ($projetos as $projeto): ?>
<div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
    <div class="w-1/5 flex items-center justify-middle">
        <img src="<?=$projeto['img']?>" class="h-50 rounded-md shadow-xl shadow-slate-900" />
    </div>
    <div class="w-4/5">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">
                <?php if($projeto['finalizado']): ?>✅<?php endif; ?>
                <?=$projeto['titulo']?>
                <?php if($projeto['finalizado']): ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?=$projeto['ano']?>)</span>
                <?php else: ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>
                <?php endif; ?>
            </h3>
            <div class="space-x-1">
            <?php
                $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                foreach ($projeto['stack'] as $posicao => $language):
            ?>
            <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                <?=$language?>
            </span>
            <?php endforeach;?>
            </div>
        </div>
        <p class="leading-6">
            <?=$projeto['descricao']?>
        </p>
    </div>
</div>
<?php endforeach; ?>