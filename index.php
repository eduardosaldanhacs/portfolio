<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/156d6a1fcd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    include('modulos/topo.php');
    include('modulos/resumo.php');
    //include('modulos/sobre-mim.php');
    include('modulos/projetos.php');
    include('modulos/certificacoes.php');
    include('modulos/habilidades.php');
    include('modulos/redes-sociais.php');
    include('modulos/rodape.php');
    ?>
</body>
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery via CDN (versão mais recente) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- REVEAL -->
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>

<!-- REVEAL -->
<script>
    window.sr = ScrollReveal({
        reset: true
    });

    if (window.innerWidth >= 1024) {

        // TOPO
        sr.reveal('#eduardo-perfil', {
            duration: 1100,
            origin: 'left',
            distance: '80px'
        }, 80);

        // SERVIÇOS
        sr.reveal('#habilidades-principais .row', {
            duration: 1100,
            origin: 'right',
            distance: '80px'
        }, 80);

        // CONTATAR
        sr.reveal('#texto-sobre', {
            duration: 1200,
            origin: 'bottom',
            distance: '80px'
        }, 80);

        // ATUAÇÃO
        sr.reveal('#atuacao .bloco', {
            duration: 1100,
            origin: 'left',
            distance: '80px'
        }, 80);

        // DIFERENCIAIS
        sr.reveal('#diferenciais .bloco', {
            duration: 1100,
            origin: 'right',
            distance: '80px'
        }, 80);

        // DEPOIMENTOS
        sr.reveal('#depoimentos .bloco', {
            duration: 1100,
            origin: 'left',
            distance: '80px'
        }, 80);

        // VALORES
        sr.reveal('#valores .bloco', {
            duration: 1200,
            origin: 'bottom',
            distance: '80px'
        }, 80);

        // NOTÍCIAS
        sr.reveal('#noticias h1', {
            duration: 1200,
            origin: 'top',
            distance: '80px'
        }, 80);

        // COLABORADORES
        sr.reveal('#colaboradores h1', {
            duration: 1200,
            origin: 'top',
            distance: '80px'
        }, 80);

    }
</script>


<script>
    // Verifica o tema armazenado no localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('bg-dark');
        document.body.classList.add('text-white');
        document.getElementById('theme-icon').classList.remove('fa-sun');
        document.getElementById('theme-icon').classList.add('fa-moon');
    } else {
        document.body.classList.add('bg-light');
        document.body.classList.add('text-black');
        document.querySelector('header').classList.remove('bg-black2');
        document.body.classList.add('text-dark');
        document.getElementById('theme-icon').classList.remove('fa-moon');
        document.getElementById('theme-icon').classList.add('fa-sun');
    }

    // Função para alternar o tema
    document.getElementById('theme-toggle').addEventListener('click', function() {
        document.body.classList.toggle('bg-dark');
        document.body.classList.toggle('text-white');
        document.body.classList.toggle('bg-light');
        document.body.classList.toggle('text-dark');

        // Alterna o ícone entre lua e sol
        const icon = document.getElementById('theme-icon');
        if (icon.classList.contains('fa-sun')) {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
            localStorage.setItem('theme', 'dark'); // Salva a preferência
        } else {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
            localStorage.setItem('theme', 'light'); // Salva a preferência
        }
    });



    document.addEventListener("scroll", function() {
        console.log("Scroll event triggered!");
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercentage = (scrollTop / scrollHeight) * 100;

        document.querySelector(".header-progress").style.width = scrollPercentage + "%";
    });
</script>



</html>