
function selecionaCliente(obj) {
	var id = $(obj).attr('data-id');
	var name = $(obj).html();
	

	$('.searchresults').hide();
	$('#nome_cliente').val(name);
	$('#cli').html(name);
	$('input[name=id_cliente]').val(id);
}

function selecionaProduto(obj) {	
	var id = $(obj).attr('data-id');
	var name = $(obj).attr('data-name');
	var preco = $(obj).attr('data-price');

	$('.listaProdutos').hide();
	$('#produto').val(name);
	$('#preco').val(preco);
	$('#qtde').val(1);
	$('#qtde').focus();
	$('input[name=id_produto]').val(id);
}

function updateSubtotal(obj) {
	var quant = $(obj).val();
	if(quant <= 0) {
		$(obj).val(1);
		quant = 1;
	}

	var preco = $(obj).attr('data-preco');
	var subtotal = preco * quant;

	$(obj).closest('tr').find('.subtotal').html('R$ '+subtotal);

	updateTotal();

}
function updateTotal() {
	var total = 0;

	for(var q=0;q<$('.p_quant').length;q++) {
		var quant = $('.p_quant').eq(q);

		var preco = quant.attr('data-preco');
		var subtotal = preco * parseInt(quant.val());

		total += subtotal;
	}

	$('#total').html("R$ " + total);
	
}
function excluirProd(obj) {
	$(obj).closest('tr').remove();
	updateTotal();
}
function inserirItens() {	
	var id = $('#id_produto').val();
	var produto = $('#produto').val();
	var qtde = $('#qtde').val();
	var preco = $('#preco').val();
	var subtotal = preco * qtde;
	
	if( $('input[name="quant['+id+']"]').length == 0 ) {
		var tr = "<tr>" +
				"<td>1</td>" + 
				"<td>"+id + "</td>"+
				"<td>"+ produto +"</td>" +
				"<td>R$ "+ preco +"</td>" +
				'<td>'+
				'<input type="number" name="quant['+id+']" class="p_quant" value="'+qtde+'" onchange="updateSubtotal(this)" data-preco="'+preco+'" />'+
				'</td>'+
			
				"<td class='subtotal'>R$ "+ preco +"</td>" +
				'<td><a href="javascript:;" onclick="excluirProd(this)" class=btn>Excluir</a></td>'+
			 "</tr>";
		$('#products_table').append(tr);
		limpar();
	}

	updateTotal();

}

$(function(){
	$('#nome_cliente').on('keyup', function(){
		var datatype = $(this).attr('data-type');
		var q = $(this).val();
		
		

		if(datatype != '') {
			$.ajax({
				url:base_url +'/cliente/pesquisa/',
				type:'POST',
				data:{q:q},
				dataType:'json',
				success:function(json) {					
					if( $('.searchresults').length == 0 ) {
						$('#nome_cliente').after('<div class="searchresults"></div>');
					}
					$('.searchresults').css('left', $('#nome_cliente').offset().left+'px');
					$('.searchresults').css('top', $('#nome_cliente').offset().top+$('#nome_cliente').height()+3+'px');

					var html = '';

					for(var i in json) {
						html += '<div class="si"><a href="javascript:;" onclick="selecionaCliente(this)" data-id="'+json[i].id_cliente+'">'+json[i].cliente+'</a></div>';
					}

					$('.searchresults').html(html);
					$('.searchresults').show();
				}
				
			});
		}

	});
	
	
	$('#produto').on('keyup', function(){
		var datatype = $(this).attr('data-type');
		var q = $(this).val();

		if(datatype != '') {
			$.ajax({
				url:base_url+'/produto/pesquisa',
				type:'POST',
				data:{q:q},
				dataType:'json',
				success:function(json) {
					if( $('.listaProdutos').length == 0 ) {
						$('#produto').after('<div class="listaProdutos"></div>');
					}
					$('.listaProdutos').css('left', $('#produto').offset().left+'px');
					$('.listaProdutos').css('top', $('#produto').offset().top+$('#produto').height()+3+'px');

					var html = '';

					for(var i in json) {
						html += '<div class="si"><a href="javascript:;" onclick="selecionaProduto(this)" data-id="'+json[i].id_produto + '" data-price="'+json[i].preco+'" data-name="'+json[i].produto+'">'+json[i].produto+' - R$ '+json[i].preco+'</a></div>';
					}

					$('.listaProdutos').html(html);
					$('.listaProdutos').show();
				}
			});
		}

	});

});


function limpar(){
	$('.listaProdutos').hide();
	$('#produto').val("");
	$('#preco').val("");
	$('#qtde').val("");
	$('#produto').focus();
	$('input[name=id_produto]').val("");	
}








