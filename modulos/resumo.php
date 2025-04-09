<style>
    @keyframes float {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(0);
        }
    }

    .fa-html5, .fa-css3-alt, .fa-js, .fa-php {
        font-size: 5rem; /* Tamanho dos ícones */
        padding: 15px; /* Espaçamento ao redor dos ícones */
        animation: float 3s infinite ease-in-out; /* Animação contínua */
        color: #70e3ea;
    }
    .icon-title {
        animation: float 3s infinite ease-in-out; /* Animação contínua */
        color: #70e3ea;
    }
</style>

<section id="sobre-mim" class="rgb text-white py-90">
    <div class="container px-5">
        <div class="col-12 py-90">
            <div class="row align-items-center justify-content-between pt-3">
                <!-- Informações do perfil -->
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="eduardo-perfil">
                    <div class="d-flex flex-column justify-content-center align-items-xxl-start align-items-xl-start align-items-lg-start align-items-md-start align-items-sm-center align-items-center">
                        <img src="imagens/eduardo-figure.png" alt="Imagem do Eduardo" class="borda-50" id="img-eduardo">
                        <h1 class="fw-bold fsize-1 mt-2">Eduardo Saldanha</h1>
                        <h3 class="text-blue fw-light">Desenvolvedor Web</h3>
                        <div>
                            <i class="px-1 py-1 me-2 bg-black4 fs-4 fa-brands fa-linkedin"></i>
                            <i class="px-1 py-1 me-2 bg-black4 fs-4 fa-brands fa-github"></i>
                            <i class="px-1 py-1 me-2 bg-black4 fs-4 fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <!-- Ícones -->
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5" id="habilidades-principais">
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="d-flex flex-column">
                                <span class="icon-title fs-3">HTML</span>
                                <i class="fa-brands fa-html5"></i>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="d-flex flex-column">
                                <span class="icon-title fs-3">CSS</span>
                                <i class="fa-brands fa-css3-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="d-flex flex-column">
                                    <span class="icon-title fs-3">JAVASCRIPT</span>
                                    <i class="fa-brands fa-js"></i>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex flex-column">
                                    <span class="icon-title fs-3">PHP</span>
                                    <i class="fa-brands fa-php"></i>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 py-90">
            <div class="row align-items-center justify-content-center">
                <div class="col-8">
                    <h2 class="text-center text-white"><i class="fa-solid fa-chart-simple me-3 text-blue"></i>Sobre Mim<i class="fa-solid fa-chart-simple ms-3 text-blue" style="transform: scaleX(-1);"></i></h2>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mt-4" id="texto-sobre">
                    <p class="fs-6 text-start">
                         Me chamo Eduardo, tenho 22 anos e resido em Porto Alegre. Cultivo uma profunda paixão pelo mundo Tech, maravilhando-me constantemente com a interação entre o ser humano e a tecnologia. A forma que criamos, diariamente algo novo, através da lógica, programação e do pensamento abstrato, faz com que eu sinta que estou na área certa.
                    </p>
                    <p class="fs-6">
                         Atualmente, estou no segundo semestre de <span class="text-blue">Ciência da Computação</span> na Universidade Federal do Rio Grande do Sul(UFRGS). Também, estou cursando <span class="text-blue">Analise e Desenvolvimento de Sistemas</span>(ADS) na Uniasselvi(EAD), onde estou no primeiro semestre. Por fora, estou fazendo cursos pela plataforma Udemy, focando no <span class="text-blue">Desenvolvimento Web</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
