var botaoSair = document.querySelector("#botaoSair");
if (botaoSair != null){
  botaoSair.onclick=function() {
  var diolog = confirm("Deseja mesmo sair?");

    if (!diolog){
    return false;
  }

  }
}
