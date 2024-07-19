<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POISON FLOWER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <style>
        .section {
            padding: 3rem 1.5rem;
            background: linear-gradient(135deg, #005AA7, #FFFDE4);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .title, .subtitle {
            color: #fff;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }
        .card img {
            max-width: 550px;
            margin: 1rem auto;
        }
        .button.is-primary {
            background-color: #23d160;
            border-color: #23d160;
            color: #fff;
            margin-top: 2rem;
        }
        .button.is-primary:hover {
            background-color: #31d772;
            border-color: #31d772;
        }
        @media screen and (max-width: 768px) {
            .title {
                font-size: 1.5rem;
            }
            .subtitle {
                font-size: 1.25rem;
            }
            .card img {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="card">
                <h1 class="title">Compra Aprovada</h1>
                <p class="subtitle">Obrigado por comprar na POISON FLOWER!</p>
                <figure class="image is-150x128">
                    <img src="../../assets/images/side_eye_cat.jpg" alt="Side Eye Cat">
                </figure>
                <a href="../../index.php?page=products" class="button is-primary is-rounded">Continuar Comprando</a>
            </div>
        </div>
    </section>
</body>
</html>