for (let i = 0 ; i < 3 ; i++) {
    let nome = document.getElementsByTagName('th')[i]
    let est_evolutivo = document.getElementsByClassName('est-ev')[i]
    let peso = document.getElementsByClassName('peso')[i]
    let altura = document.getElementsByClassName('altura')[i]
    let vida = document.getElementsByClassName('vida')[i]
    let ataque = document.getElementsByClassName('ataque')[i]
    let defesa = document.getElementsByClassName('defesa')[i]

    nome.innerText = "{$row['nome']}"
    est_evolutivo.innerText = "{$row['est_evolutivo']}"
    peso.innerText = "{$row['peso']}"
    altura.innerText = "{$row['altura']}"
    vida.innerText = "{$row['vida']}"
    ataque.innerText = "{$row['ataque']}"
    defesa.innerText = "{$row['defesa']}"
}

// echo "document.querySelector('.img img').src = '../img/{$row['nome']}.png';";
// echo "document.querySelector('.nome th').innerText = '{$row['nome']}';";
// echo "document.querySelector('.est-evolutivo .tabela .dados tr:nth-child(1) td').innerText = '{$row['est_evolutivo']}';";
// echo "document.querySelector('.est-evolutivo .tabela .dados tr:nth-child(2) td').innerText = '{$row['peso']}';";
// echo "document.querySelector('.est-evolutivo .tabela .dados tr:nth-child(3) td').innerText = '{$row['altura']}';";
// echo "document.querySelector('.est-evolutivo .tabela .dados tr:nth-child(4) td').innerText = '{$row['vida']}';";
// echo "document.querySelector('.est-evolutivo .tabela .dados tr:nth-child(5) td').innerText = '{$row['ataque']}';";
// echo "document.querySelector('.est-evolutivo .tabela .dados tr:nth-child(6) td').innerText = '{$row['defesa']}';";