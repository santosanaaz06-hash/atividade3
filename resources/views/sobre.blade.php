<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Padaria Altaria</title>
    <style>
        :root {
            --color-brown: #8B4513;
            --color-gold: #D4AF37;
            --color-orange: #FF8C00;
            --color-cream: #FFFDD0;
            --color-white: #FFFFFF;
            --color-light-green: #C1E1C1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--color-cream);
            color: var(--color-brown);
            line-height: 1.6;
        }

        header {
            background: linear-gradient(to right, var(--color-brown), var(--color-orange));
            color: var(--color-white);
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: var(--color-brown);
            padding: 0.5rem;
        }

        nav a {
            color: var(--color-white);
            text-decoration: none;
            margin: 0 1rem;
            padding: 0.5rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: var(--color-orange);
        }

        .about-page {
            max-width: 1000px;
            margin: 3rem auto;
            padding: 2rem;
            background-color: var(--color-white);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .about-page h2 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            color: var(--color-brown);
            text-align: center;
        }

        .about-page p {
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
            color: #444;
            text-align: justify;
        }

        footer {
            background-color: var(--color-brown);
            color: var(--color-white);
            text-align: center;
            padding: 2rem 1rem;
            margin-top: 3rem;
        }

        .social-links a {
            color: var(--color-white);
            margin: 0 0.5rem;
            font-size: 1.4rem;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: center;
            }

            nav a {
                margin: 0.3rem 0;
            }

            .about-page {
                margin: 2rem 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Padaria Altaria</h1>
        <p>O verdadeiro sabor da tradição</p>
    </header>

    <nav>
        <a href="index.html">Home</a>
        <a href="produtos.html">Produtos</a>
        <a href="sobre.html">Sobre</a>
        <a href="contato.html">Contato</a>
    </nav>

    <section class="about-page">
        <h2>Sobre a Padaria Altaria</h2>
        <p>A Padaria Altaria nasceu em 2003 com uma missão simples e sincera: entregar mais do que pão quente — entregar carinho, tradição e o sabor de casa. Com mais de 20 anos de história, nos tornamos um ponto de referência na cidade de Ernesto-SP, sendo parte da rotina e da memória afetiva de muitas famílias.</p>
        
        <p>Nosso diferencial está na combinação de receitas tradicionais com ingredientes frescos e selecionados. Cada fornada é feita com cuidado artesanal, respeitando o tempo e o processo que garantem aquele aroma inconfundível de padaria de verdade.</p>

        <p>Da primeira mordida no pão francês ainda quentinho até os bolos caseiros que lembram o da vovó, tudo é feito pensando no conforto, na qualidade e na alegria dos nossos clientes. Valorizamos o atendimento próximo e caloroso, criando um ambiente onde todos se sentem bem-vindos.</p>

        <p>Venha nos visitar e descubra por que a Padaria Altaria é muito mais que uma padaria. É um pedaço da nossa história servido com afeto, todos os dias.</p>
    </section>

    <footer>
        <div class="contact-info">
            <p>Endereço: Rua Andreza Ramon Roseli, bairro Lucas, Ernesto-SP</p>
            <p>Telefone: (12) 01010-0110 | WhatsApp: (11) 00101-0101</p>
            <p>Funcionamento: Segunda a Sábado, 6h às 20h | Domingo, 6h às 13h</p>
        </div>
        <div class="social-links">
            <a href="#">📱 Instagram</a>
            <a href="#">📘 Facebook</a>
            <a href="#">📞 WhatsApp</a>
        </div>
    </footer>

</body>
</html>
