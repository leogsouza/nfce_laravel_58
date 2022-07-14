 
$(function(){
	$("#codigo_produto").focus();
	
	$("#codigo_produto").on("keydown",function(event){		
		var q = $(this).val();
		
		if(event.keyCode===13){
			if(q==""){
				alert("Precisa ter um valor digitado");
			}else{
				$.ajax({
					url:base_url+'/produto/produtoPorCodigo',
					type:'POST',
					data:{q:q},
					dataType:'json',
					success:function(json) {
						if(json){
							$("#id_produto").val(json.id_produto);
							$("#descricao").html(json.produto);
							$('#imagem').attr("src", base_url_imagem + json.imagem);
							$("#qtde").val(1);
							$("#preco").val(json.preco);
							$("#total").val(json.preco);
							$("#qtde").focus();
							$(".box-carregar").hide();
						}else{							
							$(".box-carregar").hide();
						}
						
					},
					beforeSend: function(){
						$(".box-carregar").show();
					}
				});
			}
		}
	});
	
	
	
   
	$("#qtde").on("keydown",function(event){	
		if(event.keyCode===13){
			var id_produto 	= $("#id_produto").val();	
			var qtde 		= $("#qtde").val();
			var preco 		= $("#preco").val();
	
		   $.ajax({
           url: base_url + "item/inserir",
           type: "POST",
           data: {id_venda: id_venda, id_produto:id_produto, qtde:qtde, preco:preco },
           dataType: "json",
           success: function(data){
                inserirItem(data); 
				limpar();
				$(".box-carregar").hide(); 
            },		
			beforeSend: function(){
				$(".box-carregar").show();
			},
			 error: function(XMLHttpRequest,  errorThrown) { 
				 alert("Error: " + errorThrown); 
			}
        });
			
		}

	});	
	
	$("#total_pago").on("keyup",function(event){
		
			var total_pago 	= $("#total_pago").val();	
			$("#troco").val(total_pago - total);
	});
	
	
	 $("#busca").on("keyup", function(){      
	 var q = $(this).val(); 
      $.ajax({
         url: base_url +"produto/pesquisa",
         type:"POST",
         data: { q:q},
         dataType: 'json',
         success: function (data){
             if($(".listaProdutos").length==0){
                 $("#busca").after('<div class="listaProdutos"></div>');
             }
             $('.listaProdutos').css('left', $('#busca').offset().left+'px');
             $('.listaProdutos').css('top', $('#busca').offset().top + $("#busca").height()+3+'px');
             
             var html = "";
             for(var i in data){
                 html +='<div class="si"><a href="javascript:;" onclick="selecionarProduto(this)" ' +
                         ' data-id="'+ data[i].id_produto +
                         '" data-preco="' + data[i].preco +
                         '" data-imagem="' + data[i].imagem +
                         '" data-nome ="' + data[i].produto +'">' + 
                         data[i].produto + ' - R$ ' + data[i].preco + '</a></div>';
             }
             
             $('.listaProdutos').html(html);
             $('.listaProdutos').show();
         }
      });
   });  

});
function selecionarProduto(obj){
   var id = $(obj).attr('data-id');
   var nome = $(obj).attr('data-nome');
   var imagem = $(obj).attr('data-imagem');
   var preco = $(obj).attr('data-preco');
   $('.listaProdutos').hide();
   $('#descricao').html(nome);
   $('#imagem').attr("src", base_url_imagem + imagem);
   $('#preco').val(preco);
   $("#total").val(preco);
   $('#qtde').val(1);
   $('#qtde').focus();
   $('#id_produto').val(id);
   
   console.log(id + " - " + nome + ' - ' + preco);
   
}


function inserirItem(id_item){
	var id_produto 	= $("#id_produto").val();
	var produto 	= $('#descricao').html();
	var qtde 		= $("#qtde").val();
	var preco 		= $("#preco").val();	
    var subtotal 	= preco * qtde;    
   
	var tr ="<tr class='cor-tab1'>"+        
		"<td>"+ ++qtde_itens + "</td>" + 
		"<td>"+produto+"</td>" +
		"<td>"+qtde+"</td>" + 		
		"<td>R$ "+preco+"</td>" + 
		'<td class="subtotal">R$ '+ subtotal +'</td>' +
		'<td><a href="javascript:;"  data-idItemVenda="' + id_item +  '" data-valor ="'+ subtotal + '" onclick="excluirProduto(this)"  class="btn">Excluir</a></td>' +
	"</tr>";
	
	$("#itensDaVenda").append(tr);
	limpar();
	$(".box-carregar").hide();
	atualizaTotal("+", subtotal);
    
}

function atualizaTotal(tipo, valor){    
	var resultado = 0;
	if(tipo =="+"){
		resultado = parseInt(total) + parseInt(valor);
	}else{
		resultado = parseInt(total) - parseInt(valor);		
	}    
    
    $("#total_geral").val("R$ " + resultado);
    total = resultado;
}


function novaVenda(){
		$.ajax({
			url:base_url+'venda/novaVenda',
			type:'POST',
			dataType: 'json',
			data:{ },
			success: function(data){
				inserirItem(data);
				$("#id_venda").val(data);
			},
			 error: function(XMLHttpRequest,  errorThrown) { 
				 alert("Error: " + errorThrown); 
			}
		});		
}

function excluirProduto(obj){
    var id_item_venda = $(obj).attr("data-idItemVenda");
    var valor 		  = $(obj).attr("data-valor");
	
	$.ajax({
        url: base_url + "item/excluir/",
        type: "POST",
        data: {id_item: id_item_venda, id_venda:id_venda, total:valor },
        dataType: "json",
        success: function(data){
            console.log(data);
            $(obj).closest("tr").remove();
            atualizaTotal("-", valor);
			--qtde_itens;
        }
     });
	    
}

function pagar(){
	$("#total_itens").val(qtde_itens);
	$("#total_pagar").val(total);
	abrirModal("#janela1");
}
function finalizar_venda(){
	//inicio();	
	$("#mascara").hide();
    $(".window").hide();
}
function limpar(){
	$("#codigo_produto").val("");
	$("#id_produto").val("");
	$("#descricao").html("");
	$("#qtde").val("");
	$("#preco").val("");
	$("#total").val("");
	$('#imagem').attr("src", base_url + "assets/img/semproduto.png");
	$("#codigo_produto").focus();	
}

function inicio(){
	$("#codigo_produto").val("");
	$("#id_produto").val("");
	$("#id_venda").val("");
	$("#qtde").val("");
	$("#preco").val("");
	$("#total").val("");
	$("#descricao").html("");
	$('#imagem').attr("src", base_url + "assets/img/semproduto.png");
	$(".semproduto").css("display", "block");
	$(".scroll").css("display", "none");
	$(".fechar_total").css("display", "none");			
	$("#codigo_produto").focus();
}








