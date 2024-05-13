<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <!-- Adicione o link para o CSS do Tailwind -->
    <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />

    <style>
        /* Adicione estilos personalizados aqui, se necessário */
        .slider-container {
            position: relative;
            overflow: hidden;
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider-slide {
            min-width: 100%;
        }
    </style>
</head>

<body class="bg-gray-100 pb-0 mb-0">
   
<?php include "public/components/header.php"?>

    <!-- Hero Section -->
    <section class="bg-gray-200 px-4 py-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="md:text-left">
                    <h2 class="text-3xl font-bold mb-4">Conheça nosso sistema de cadastro online.</h2>
                    <p class="text-lg mb-4">
                        Cadastre-se agora e tenha acesso aos melhores serviços de saúde.
                    </p>
                    <a href="?app=register" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md">Cadastre-se</a>
                </div>
                <div>
                    <img src="public/assets/Homen usando celula.jpeg" alt="Imagem de destaque" class="rounded-lg">
                </div>
            </div>
            <div class="mt-8 md:text-left">
                <h3 class="text-xl font-semibold">Destaque dos recursos:</h3>
                <ul class="mt-4">
                    <li class="mb-2"><span class="text-blue-500 font-semibold">Cadastro rápido:</span> Cadastre-se em minutos e comece a usar nossos serviços imediatamente.</li>
                    <li class="mb-2"><span class="text-blue-500 font-semibold">Segurança garantida:</span> Suas informações estão seguras conosco. Utilizamos as mais recentes tecnologias de segurança para proteger seus dados.</li>
                    <li class="mb-2"><span class="text-blue-500 font-semibold">Atendimento personalizado:</span> Conte com nossa equipe especializada para atender às suas necessidades de saúde.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Slider Section -->
    <!-- <section class="bg-gray-200 px-4 py-12">
  <div class="container mx-auto">
    <div class="slider-container">
      <div class="slider-wrapper">
        <div class="slider-slide">
          <img src="../public/uploads/thom-holmes-Lrfw0U_o9I0-unsplash.jpg" alt="Slide 1" class="w-full">
        </div>
        <div class="slider-slide">
          <img src="../public/uploads/thom-holmes-Lrfw0U_o9I0-unsplash.jpg" alt="Slide 2" class="w-full">
        </div>
        <div class="slider-slide">
          <img src="../public/uploads/thom-holmes-Lrfw0U_o9I0-unsplash.jpg" alt="Slide 3" class="w-full">
        </div>
        <div class="slider-slide">
          <img src="../public/uploads/thom-holmes-Lrfw0U_o9I0-unsplash.jpg" alt="Slide 4" class="w-full">
        </div>
      </div>
    </div>
  </div>
</section>
 -->
    <!-- Card Section -->
    <section class="bg-gray-200 px-4 py-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-8">Recursos em destaque</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-xl font-bold mb-4">Serviços Médicos</h3>
                    <p class="text-gray-700">
                        Tenha acesso a uma variedade de serviços médicos online, incluindo consultas virtuais, prescrições e muito mais.
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-xl font-bold mb-4">Acompanhamento Personalizado</h3>
                    <p class="text-gray-700">
                        Receba um acompanhamento personalizado de profissionais de saúde qualificados para atender às suas necessidades específicas.
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-xl font-bold mb-4">Acesso a Resultados de Exames</h3>
                    <p class="text-gray-700">
                        Visualize e compartilhe seus resultados de exames de forma rápida e segura, diretamente de sua conta online.
                    </p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-xl font-bold mb-4">Lembretes de Medicamentos</h3>
                    <p class="text-gray-700">
                        Receba lembretes automáticos para tomar seus medicamentos no horário certo, garantindo um tratamento eficaz.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Text Section -->
    <section class="py-12 px-4">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Por que escolher nossa plataforma?</h2>
            <p class="text-lg">
                Oferecemos os melhores serviços de saúde online, com atendimento personalizado e fácil acesso a informações médicas.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pb-4 pt-8">
        <div class="container mx-auto px-4 flex flex-wrap justify-between">
            <!-- Links úteis -->
            <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-bold mb-4">Links úteis</h3>
                <ul>
                    <li><a href="#">Perguntas frequentes</a></li>
                    <li><a href="#">Termos de serviço</a></li>
                    <li><a href="#">Política de privacidade</a></li>
                </ul>
            </div>
            <!-- Informações de contato -->
            <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-bold mb-4">Contato</h3>
                <p>
                    Endereço: Rua Exemplo, 123
                </p>
                <p>
                    Telefone: (00) 1234-5678
                </p>
                <p>
                    Email: contato@example.com
                </p>
            </div>
            <!-- Navegação -->
            <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-bold mb-4">Navegação</h3>
                <ul>
                    <li><a href="#">Página Inicial</a></li>
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <!-- Redes sociais -->
            <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-bold mb-4">Siga-nos</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <!-- Direitos Autorais -->
        <div class="mt-4">
            <p class="text-center ">
                &copy; 2024 Todos os direitos reservados.
            </p>
        </div>
    </footer>

    <script src="/views/js/slider.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>