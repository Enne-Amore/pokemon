// Chamando a tag que representa o botão de ir pro topo
const topo = document.getElementById('topo')

// Adicionando os eventos
topo.addEventListener("click", function(){
    window.scrollTo(0, 0)
    document.getElementsByTagName('a')[0].focus()
})

// Voltar ao topo usando o teclado
topo.addEventListener('keypress', (tecla) => {
    if (tecla.key === "Enter") {
        tecla.target.click()
    }
})


// Aplicando a função de ocultar
document.addEventListener('scroll', ocultar)

// Função de ocultar
function ocultar() {
    if (window.scrollY > 400) {
        topo.style.display = 'flex'
    } else {
        topo.style.display = 'none'
    }
    
}

ocultar()