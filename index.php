<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieWise</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-200">

    <?php include 'components/header.php'; ?>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <h1 class="mt-6 font-bold text-lg">Explorar</h1>
        <!-- formulario de pesquisa -->
        <form class="w-full flex space-x-2 mt-6">
            <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none py-2 px-2" placeholder="Pesquisar..." name="search" required>
            <button type="submit">🔎</button>
        </form>
        <!-- end formulario de pesquisa -->

        <section class="space-y-4">
            <!-- filme -->
            <div class="w-1/3 p-2 rounded border-stone-800 border-2 bg-stone-900">

                <div class="flex">
                    <div class="w-1/3"><img src="" alt="imagem"></div>
                    <div>
                        <h2 class="font-semibold">Titulo</h2>
                        <h3 class="text-xs italic">Diretor</h3>
                        <div class=" text-xs italic">⭐⭐⭐(3 avaliações)</div>
                    </div>
                </div>

                <div class="text-sm">
                    <div>Descrição</div>
                </div>

            </div>

        </section>

    </main>

</body>

</html>