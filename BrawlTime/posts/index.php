<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawl Time</title>
    <link rel="icon" href="imagem site.png" type="image/x-icon">
</div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');

        body {
            background-color: rgb(37, 37, 37);
            font-family: 'Lilita One', cursive;
            color: white;
            margin: 0;
            padding: 0;

        }

        h1 {
            color: rgb(255, 196, 0);
        }

        header {
            background-image: url('Design sem nome.png');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 250px;
            border: 5px solid rgb(255, 196, 0);
        }

        .content {
            padding: 0px;
        }

        .news-article {
            background-color: rgb(50, 50, 50);
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            transition: transform 0.3s ease, max-height 0.3s ease;
            overflow: hidden;
            max-height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
        }

        .news-article h2 {
            color: rgb(255, 196, 0);
            font-size: 2em;
            margin-bottom: 10px;
        }

        .news-article p {
            color: white;
            font-size: 1em;
            transition: .5s;
            flex: 1;
            margin-top: 5px;
        }

        .news-article img {
            display: none;
            width: 400px;
            margin-bottom: 20px;
        }

        .news-article:hover {
            transform: scale(1.05);
            transition: .5s;
            max-height: 500px;
        }

        .news-article:hover img {
            display: block;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgb(37, 37, 37);
            color: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .popup h2 {
            margin: 0;
            margin-bottom: 10px;

        }

        .popup button {
            background-color: rgb(255, 196, 0);
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-family: 'Lilita One', cursive;
        }

        .blur-background {
            filter: blur(5px);

        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }   
    </style>
</head>
<body>
    
    </div>
    <div id="overlay" class="overlay"></div>
    <div id="popup" class="popup">
        <h2 style="color: rgb(255, 196, 0);">Bem-vindo!</h2>
        <h3 style="color: rgb(255, 255, 255);">Aproveite ao máximo nosso site!</h3>
        <p style="color: rgb(255, 255, 255);">Nesse site você verá notícias frescas sobre Brawl Stars e mais para frente um player de música com as trilhas sonoras do jogo</p>
                <p style="color: rgb(255, 255, 255);">Dica: Clique no título das seções para ir direto a elas</p>
                <p style="color: rgb(255,255,255);">Quando o player de música for lançado, nós vamos criar um botão para levar para o player </p>
                <p style="color: rgb(255, 255, 255);">Espero que goste! ;)</p>
        <button onclick="closePopup()",>Fechar</button>
    </div>
    <div id="main-content">
        <br><br>
        <header>
        </header>
        <div class="content">
            <div class="section" id="noticias">
                <h1 style="font-size: 40px;">Notícias</h1>
                <!--Adicionar noticias novas (criar nova pagina de noticia depois) -->
                <div class="news-article" onclick="location.href='noticia1.php'">
                    <h2>Lançamento do site</h2>
                    <p>Entenda como o nosso site vai funcionar</p>
                    <img src="imagem brawl.png" alt="Imagem do site">
                </div>
                <div class="news-article" onclick="location.href='noticia2.php'">
                    <h2>Título da Notícia 2</h2>
                    <p>Conteúdo da notícia 2...</p>
                    <img src="imagem2.jpg" alt="Imagem da notícia">
                </div>
                <div class="news-article" onclick="location.href='noticia3.php'">
                    <h2>Título da Notícia 3</h2>
                    <p>Conteúdo da notícia 3...</p>
                    <img src="imagem3.jpg" alt="Imagem da notícia">
                </div>
                <div class="news-article" onclick="location.href='noticia4.php'">
                    <h2>Título da Notícia 4</h2>
                    <p>Conteúdo da notícia 4...</p>
                    <img src="imagem3.jpg" alt="Imagem da notícia">
                </div>
            </div>
            <p style="text-align: center;">Por enquanto é só isso de notícias</p>
            </div>
        </div>
    </div>
    <script>
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('main-content').classList.remove('blur-background');
            document.getElementById('search-bar').classList.remove('disabled');
        }
    

        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                search();
            }
        }

    const sections = ['#noticias h1'];
    sections.forEach(selector => {
        const element = document.querySelector(selector);
        element.style.cursor = 'pointer';
        element.style.transition = 'transform 0.3s ease';
        element.style.textAlign = 'center';
        element.onmouseover = function() {
            this.style.transform = 'scale(1.1)';
        };
        element.onmouseout = function() {
            this.style.transform = 'scale(1)';
        };
    });

    </script>
    
</body>
</html>

