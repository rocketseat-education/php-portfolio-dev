<?php
$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => 'https://github.com/seu-usuario', 'texto' => 'Github'],
    ['href' => 'https://linkedin.com/in/seu-usuario', 'texto' => 'Linkedin'],
    ['href' => 'https://twitter.com/seu-usuario', 'texto' => 'Twitter'],
];
?>
<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">

    <!-- Logo -->
    <div class="font-bold text-xl text-cyan-600">
        Meu Portfolio ...
    </div>

    <!-- Links -->
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= htmlspecialchars($item['href']) ?>" class="hover:underline">
                        <?= htmlspecialchars($item['texto']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>
