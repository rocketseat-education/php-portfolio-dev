<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-slate-900 text-gray-100">

<?php include ('./components/header.php'); ?>

<main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <!-- Hero -->
    <?php include('./components/hero.php'); ?>

    <!-- Projetos -->
    <section class="space-y-3 py-6" id="projetos">
        <h2 class="text-2xl font-bold"> Meus Projetos</h2>
        <!-- Projeto -->

    <?php include('./components/projetos.php'); ?>

    </section>
</main>

<footer class="mx-auto max-w-screen-lg min-h-20">

    <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
        © Copyright <?=date('y')?> . Contruindo ❤︎ por mim mesmo :) .
    </div>

</footer>

</body>
</html>