let barraBuscaJs = document.querySelector('#barraBusca')
let formulario = document.querySelector('#formulario')

barraBuscaJs.oninput = function() {
  console.log(barraBuscaJs.value)
}

formulario.onsubmit = function(evento) {
  evento.preventDefault()

  if (barraBuscaJs.value == '') {
    barraBuscaJs.style.border = '1px solid red'
    barraBuscaJs.setAttribute('placeholder', 'Digite algo para pesquisar')
  } else {
    barraBuscaJs.style.border = '1px solid green'
    formulario.submit()
  }
}
