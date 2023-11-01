function confirma(evento){
    var opcao = window.confirm("Tem certeza que deseja excluir o treino?");
    if(opcao){
      var id  = evento;
      deleta(1,id);
    }else{
      deleta(2);
  
    }
  }

  function deleta(alternativa, id){
      if(alternativa == 1){
    
    /*var campoOculto = document.createElement("input");
    campoOculto.type = "hidden";
    campoOculto.name = "deletado";
    campoOculto.id = id;
    campoOculto.value = id;
    var form = document.getElementById("deletado");
    form.appendChild(campoOculto);
*/
$(".treino-" + id).empty().remove();
    $.ajax({
        url: 'http://localhost/Personal%20Manager%20Bootstrap%20-%20AJAX/deleta_treino.php' ,
        method: 'POST',
        data: {deletado: id},
        dataType: 'json',
    }).done(function(){
    console.log(id);
     

    });
    
    //document.getElementById("deletado").submit();
    
    }
  }



function valida_cadastro(){

    var nome = document.getElementById("nome").value
    var email = document.getElementById("email").value
    var senha = document.getElementById("senha").value
    var confirma = document.getElementById("confirma").value
    var aux = 0;
    
    if(nome === ""){
        let nome2 = document.getElementById("nome2");
        nome2.innerHTML = "Campo obrigtório.";
        aux = 1;
    }else{
        nome2.innerHTML = "";
    }

    if(email === ""){
        let email2 = document.getElementById("email2");
        email2.innerHTML = "Campo obrigtório.";
        aux = 1;
    }else{
        email2.innerHTML = "";
    }

    if(senha === ""){
        let senha2 = document.getElementById("senha2");
        senha2.innerHTML = "Campo obrigtório.";
       aux = 1;
    }else{
        senha2.innerHTML = "";
    }

    if(confirma === ""){
        let confirma2 = document.getElementById("confirma2");
        confirma2.innerHTML = "Campo obrigtório.";
       aux = 1;
    }else{
    confirma2.innerHTML = "";
    }

    if(senha !== "" && confirma !== "" && senha !== confirma){
        let confirma2 = document.getElementById("confirma2");
        confirma2.innerHTML = "Campo deve ser igual a senha."
        aux = 1
    }

    if (nome != "" && senha != "" && email != "" && confirma != "" && senha == confirma){
        aux = 0;
    }

    if(aux == 1){
        return false;
    }
    

    return true;

} 


