<?php
$itens = [
    ['href' => '#projetos', 'src' => 'img/x-icon.png', 'alt' => 'Twitter Logo'],
    ['href' => '', 'src' => 'img/facebook-icon.png', 'alt' => 'Facebook Logo'],
    ['href' => '', 'src' => 'img/linkedin-icon.png', 'alt'=> 'Linkedin Logo'],
    ['href' => '', 'src' => 'img/youtube-icon.png', 'alt' => 'YouTube Logo'],
];
?>

<section class="flex gap-x-3">

    <!-- Titulo e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é ...</h1>
        <p class="text-xl leanding-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
            Especilizado em PHP e HTML, mas também tenho conhecimento em outras linguagens como Python e Java.
        </p>

        <ul class="flex gap-x-3 mt-3">
            <!-- links de redes sociais -->
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= htmlspecialchars($item['href']) ?>" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>" />
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Imagens -->
    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img class="h-60 -mt-6 hover:animate-pulse" src="img/avatar.svg" alt="Foto Nome Sobrenome" />
        </div>
    </div>

</section>