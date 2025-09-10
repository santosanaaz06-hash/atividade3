<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Padaria Altaria</title>
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

        .contact-section {
            max-width: 800px;
            margin: 3rem auto;
            padding: 2rem;
            background-color: var(--color-white);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: var(--color-brown);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input, textarea {
            padding: 0.8rem;
            margin-bottom: 1.2rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn {
            background-color: var(--color-gold);
            color: var(--color-brown);
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn:hover {
            background-color: var(--color-orange);
            transform: translateY(-2px);
        }

        .contact-info {
            margin-top: 2rem;
            text-align: center;
            color: #555;
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

            .contact-section {
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

    <section class="contact-section">
        <h2>Fale Conosco</h2>
        <form method="POST">
            @csrf
            <label for="nome">Seu Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

            <label for="email">Seu E-mail</label>
            <input type="email" id="email" name="email" placeholder="exemplo@dominio.com" required>

            <label for="mensagem">Sua Mensagem</label>
            <textarea id="mensagem" name="mensagem" placeholder="Como podemos ajudar você?" required></textarea>

            <button type="submit" class="btn">Enviar Mensagem</button>
        </form>

        <div class="contact-info">
            <p>📍 Rua Andreza Ramon Roseli, bairro Lucas, Ernesto-SP</p>
            <p>📞 (12) 01010-0110 | 📱 WhatsApp: (11) 00101-0101</p>
            <p>🕐 Atendimento: Seg a Sáb, 6h às 20h | Dom, 6h às 13h</p>
        </div>
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
