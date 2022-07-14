$(function(){

   /* $( "#pesq" ).autocomplete({
            source: function(request, response){
                $.ajax({
                    url: base_url + "produto/buscaProduto_json" ,
                    type:"post",      
                    dataType: 'json',
                    data:{ pesq: request.term},
                    success: function (data) {
                        response($.map(data,function(item){
                            return{
                                label: item.produto,
                                id: item.id_produto,
                                estoque: item.estoque_atual
                            }
                        }));
                    } 
                });
            },
            select:function(event, ui){
                if(ui.item){
                    $("#id_produto").val(ui.item.id);
                    $("#estoque").val(ui.item.estoque);
                    $("#qtde").focus();
                }
            }
    });
    
    $("#qtde").on("keydown",function(event){
        if(event.keyCode===13){
            inserir();
            $("input:text").val('');
            $("#pesq").focus();
        }
    });
*/
});


function inserirUmaImagem(img){ 
    var valorInput ="";
    var selecionados = new Array();
    var retorno ="";
    var tem= false;
    
    if (localStorage.getItem('Imagens')) {
        var imagens = localStorage.getItem('Imagens');
        selecionados = JSON.parse(imagens);
    }
      
    for(i = 0; i < selecionados.length; i++) {
        valor = selecionados[i].split("#");
        recebido = img.split("#");
        if(valor[0]==recebido[0]){
            tem= true;
        }
    }
    if(tem==false){
        selecionados.push( img);
    }    
    
    localStorage.clear();
    localStorage.setItem('Imagens', JSON.stringify(selecionados));
    //preenchendo a lista
    for(i = 0; i < selecionados.length; i++) {
        valor = selecionados[i].split("#");
        valorInput +=valor[0]+"#";
        retorno += "<div class='caixa-img' id="+ valor[0] +"><div class='thumb'><img src='"+ base_url_imagem + valor[1]  +"'></div>";
        retorno += "<a href='javascript:;'onclick='excluirImagemDoProduto(" + valor[0]  + ")' class='delete'></a></div>";
    }
    $("#listaImagensParaInserir").html(retorno);
     $("#txt_imagens").val(valorInput);
}


function selectionarImagens(id){
    var valorInput ="";
    var selecionados = new Array();
    var retorno ="";
    var tem = false;
    
    if (localStorage.getItem('Imagens')) {
        var imagens = localStorage.getItem('Imagens');
        selecionados = JSON.parse(imagens);
    }
    
    
    $("input[name='checks[]']:checked").each(function (){
      if(selecionados.indexOf($(this).val()) == -1) {  
            selecionados.push( $(this).val());
        }       
    });  
    localStorage.clear();
    localStorage.setItem('Imagens', JSON.stringify(selecionados));
    //preenchendo a lista
    for(i = 0; i < selecionados.length; i++) {        
        valor = selecionados[i].split("#");
        valorInput +=valor[0]+"#";
        retorno += "<div class='caixa-img' id="+ valor[0] +"><div class='thumb'><img src='"+ base_url_imagem + valor[1]  +"'></div>";
        retorno += "<a href='javascript:;'onclick='excluirImagemDoProduto(" + valor[0]  + ")' class='delete'></a></div>";
        
    }
    $("#listaImagensParaInserir").html(retorno);
    $("#txt_imagens").val(valorInput);
    
}

function excluirImagemDoProduto(id){
    var retorno ="";
    var imagens = localStorage.getItem('Imagens');
    selecionados = JSON.parse(imagens);
    
    for(i = 0; i < selecionados.length; i++) {
        valor = selecionados[i].split("#");
        if(valor[0]==id){
            selecionados.splice(i,1);
            //alert( "achei o produto: " + valor[1]);
        }
    }
      
    localStorage.clear();
    localStorage.setItem('Imagens', JSON.stringify(selecionados));
    //preenchendo a lista
    for(i = 0; i < selecionados.length; i++) {
        valor = selecionados[i].split("#");
        retorno += "<div class='caixa-img' id="+ valor[0] +"><div class='thumb'><img src='"+ base_url_imagem + valor[1]  +"'></div>";
        retorno += "<a href='javascript:;'onclick='excluirImagemDoProduto(" + valor[0]  + ")' class='delete'></a></div>";
    }
    $("#listaImagensParaInserir").html(retorno);
}
function buscarImagem(tipo){
    var retorno="";
      tema = $("#txt_id_tema").val();
      pesq = $("#txt_titulo").val();
      prod = $("#id_produto").val();
      $.ajax({
            url: base_url+"imagem/buscarImagem",
            type:"post",      
            dataType: 'json',
            data:{
                    txt_id_tema     : tema,
                    txt_titulo      : pesq,
                    txt_id_produto  : prod
                },
            success: function (data) {
            $.each(data, function(key){
                var nome = data[key].id_imagem + "#" +  data[key].path_imagem ;
                 retorno += "<tr>";
                 retorno += "<td align='left'><input type='checkbox' name='checks[]' value='" + data[key].id_imagem + "#" + data[key].path_imagem + "' ><label></label></td>";
                 retorno += "<td align='left'><div class='thumb'><img src="  + base_url_imagem + data[key].path_imagem + "></div></td>";
                 retorno += "<td align='left'>"  + data[key].id_imagem + "</td>";
                 retorno += "<td align='left'>"  + data[key].titulo_imagem + "</td>";
                if(tipo=="E"){ 
                    retorno += "<td align='right'><a href='javascript:;'onclick='inserirImagemNoProduto(" + prod + ',' + data[key].id_imagem + ")' class='btn editar'>Inserir</a></td>";
                }
                if(tipo=="I"){
                    retorno += "<td align='right'><a href='javascript:;'onclick='inserirUmaImagem(\"" + nome + "\")' class='btn editar'>Inserir</a></td>";
                }
                 retorno += "</tr>"; 
            });
          
            $("#listaImagensProduto").html(retorno);
        }
        });
  }
 
function inserirImagemNoProduto(id_produto, id_imagem){       
     $.ajax({
           url: base_url + "produto/inserirImagemNoProduto",
           type: "post",
           data:{
                   id_produto   : id_produto,
                   id_imagem    : id_imagem
               },
           success: function(data){                    
               alert(data);
               listarImagemDoProduto(id_produto); 
           }
       });
 }
function listarImagemDoProduto(id_produto){
   var retorno="";
    $.ajax({
       url: base_url + "imagem/listarImagemDoProduto" ,
       type:"post",      
       dataType: 'json',
       data:{ id_produto   : id_produto },
       success: function (data) {
           $.each(data, function(key){
                retorno += "<tr>";
                retorno += "<td align='left'>"  + data[key].id_imagem + "</td>";
                retorno += "<td align='left'><div class='thumb'><img src="  + base_url_imagem + data[key].path_imagem + "></div></td>";                
                retorno += "<td align='left'>"  + data[key].titulo_imagem + "</td>";
                retorno += "<td align='right'><a href=" + base_url + "imagem/detalhe/" + data[key].id_imagem + " class='btn editar'>Detalhes</a>";
                retorno += "<a href=" + base_url + "imagem/detalhe/" + data[key].id_imagem_produto + " class='btn excluir'>Excluir</a></td>";
                retorno += "</tr>"; 
           });
          
            $("#listaImagensDoProduto").html(retorno);
        }
    }); 
}


function formataData(data){
    split = data.split('-');
    novadata = split[2] + "/" + split[1] + "/" + split[0];
    return novadata;
}
