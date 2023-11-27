<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/padrao.css">
    <link rel="stylesheet" href="../css/pokemon.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="../js/topo.js" defer></script>
</head>
<body>
    
    <header id="cabecalho">

        <figure class="logo">
            <a href="../../index.html">
                <img src="../img/pokemon_logo.png" alt="Logo Pokémon">
            </a>
        </figure>

        <nav class="nav">
            <ul>
                <a href="../../index.html" id="voltar">
                    <span class="material-symbols-outlined" id="icon-back">
                        keyboard_backspace
                    </span>
                    Voltar
                </a>
                <a href="#conteudo">Personagens</a>
                <a href="#rodape">Créditos</a>
            </ul>
        </nav>

    </header>

    <main id="conteudo" class="agua">
        <section class="est-evolutivo">
            <article class="pokemon">
                <figure class="img">
                    <img src="../img/Squirtle.png" alt="Squirtle">
                </figure>
                <article class="tipos">
                    <div class="tipo agua">água</div>
                </article>
            </article>
            <table class="tabela esquerda">
                <thead class="nome">
                    <tr>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="dados">
                    <tr>
                        <td>Estágio Evolutivo: </td>
                    </tr>
                    <tr>
                        <td>Peso: </td>
                    </tr>
                    <tr>
                        <td>Altura: </td>
                    </tr>
                    <tr>
                        <td>Vida: </td>
                    </tr>
                    <tr>
                        <td>Ataque: </td>
                    </tr>
                    <tr>
                        <td>Defesa: </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <hr>
        <section class="est-evolutivo reverse">
            <article class="pokemon">
                <figure class="img">
                    <img src="../img/Wartortle.png" alt="Wartortle">
                </figure>
                <article class="tipos">
                    <div class="tipo agua">água</div>
                </article>
            </article>
            <table class="tabela direita">
                <thead class="nome">
                    <tr>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="dados">
                    <tr>
                        <td>Estágio Evolutivo: </td>
                    </tr>
                    <tr>
                        <td>Peso: </td>
                    </tr>
                    <tr>
                        <td>Altura: </td>
                    </tr>
                    <tr>
                        <td>Vida: </td>
                    </tr>
                    <tr>
                        <td>Ataque: </td>
                    </tr>
                    <tr>
                        <td>Defesa: </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <hr>
        <section class="est-evolutivo">
            <article class="pokemon">
                <figure class="img">
                    <img src="../img/Blastoise.png" alt="Blastoise">
                </figure>
                <article class="tipos">
                    <div class="tipo agua">água</div>
                </article>
            </article>
            <table class="tabela esquerda">
                <thead class="nome">
                    <tr>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="dados">
                    <tr>
                        <td>Estágio Evolutivo: </td>
                    </tr>
                    <tr>
                        <td>Peso: </td>
                    </tr>
                    <tr>
                        <td>Altura: </td>
                    </tr>
                    <tr>
                        <td>Vida: </td>
                    </tr>
                    <tr>
                        <td>Ataque: </td>
                    </tr>
                    <tr>
                        <td>Defesa: </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!--Para voltar ao topo da tela-->
        <span class="material-symbols-outlined" aria-hidden="true" aria-label="Volte ao topo da página clicando aqui" id="topo" tabindex="0">
            stat_3
        </span>

    </main>

    <footer id="rodape">
        <p>
            Projeto passado por Leando e desenvolvido por <a href="" rel="external" target="_blank">Enne</a> e <a href="" rel="external" target="_blank">Thiago.</a>
        </p>
        <hr>
        <article class="autorias">
            <h3>Autorias de fonte:</h3>
            <ul>
                <a href="https://pluspng.com/png-36599.html" rel="external" target="_blank">Logo da franquia</a>
                <a href="https://pokemon.fandom.com/pt-br/wiki/Pok%C3%A9dex" rel="external" target="_blank">Imagem da pokedex</a>
                <a href="https://www.serebii.net/pokemon/nationalpokedex.shtml" rel="external" target="_blank">Imagem dos pokémon</a>
            </ul>
        </article>
    </footer>

    <?php
        // Chamada do arquivo que se conecta com o banco de dados 
        include '../php/conexao.php';

        // Consulta SQL para obter dados dos pokémons
        $sql = "SELECT nome, est_evolutivo, peso, altura, vida, ataque, defesa FROM pokemon_geral ORDER BY id_pokemon";
        $result = $conn->query($sql);

        // Condicional para caso tenha pelo menos uma linha da tabela
        if ($result->num_rows > 0) {

            $index = -11; // Começando em 1 para corresponder aos índices de :nth-child
            
            // Pegando cada dado de cada linha da tabela e adicionando ao seu devido lugar
            while ($row = $result->fetch_assoc()) {

                // Feitura de códigos JavaScript
                echo "<script>";

                echo "document.querySelector('.est-evolutivo:nth-child($index) .nome th').innerText = '{$row['nome']}';";

                echo "document.querySelector('.est-evolutivo:nth-child($index) .dados tr:nth-child(1) td').innerText += ' {$row['est_evolutivo']}º';";

                echo "document.querySelector('.est-evolutivo:nth-child($index) .dados tr:nth-child(2) td').innerText += ' {$row['peso']}kg';";

                echo "document.querySelector('.est-evolutivo:nth-child($index) .dados tr:nth-child(3) td').innerText += ' {$row['altura']}m';";
                
                echo "document.querySelector('.est-evolutivo:nth-child($index) .dados tr:nth-child(4) td').innerText += ' {$row['vida']}';";

                echo "document.querySelector('.est-evolutivo:nth-child($index) .dados tr:nth-child(5) td').innerText += ' {$row['ataque']}';";

                echo "document.querySelector('.est-evolutivo:nth-child($index) .dados tr:nth-child(6) td').innerText += ' {$row['defesa']}';";

                echo "</script>";

                // Adição de números impáres consecutivamente em diante
                $index = $index + 2;
            }
        } else { // Caso não tenha nenhuma linha na tabela do banco de dados
            echo "0 results";
        }

        // Encerramento de sessão
        $conn->close();
    ?>

</body>
</html>