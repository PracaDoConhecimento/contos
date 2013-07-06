$(document).ready(function() {	
	// Stuff to do as soon as the DOM is ready;
	
	var controle = 0;

	$('.abas_ativas a').click(function() {		
		var className = $(this).attr('class');
		if (0 === controle) {			
			$(this).css('visibility','hidden');
			$('.abas_inativas').find('.' + className).css('visibility','visible');
			controle++;			

			if ( $('.capa').hasClass('ativo') )
				 $('.capa').removeClass('ativo').addClass('inativo');

			//se a capa estiver ativa, deixa-a inativa
			//e daí abre a página
			
			$.ajaxSetup({cache:false});

			$('#capitulo').load('part-' + className + ".php", function() {
				if("sobre" !== className) {
					$( 'audio' ).audioPlayer();
				}				
				console.log('part-' + className + ".php ----- carregado");
			});

		} else {
			$('.abas_inativas').find('.ativo').removeClass('ativo').addClass('inativo');
		}

		return false;
		
	});


	$('.abas_inativas a').click(function() {
		var className = $(this).attr('class');
		$(this).css('visibility','hidden');
		$('.abas_ativas').find('.' + className).css('visibility','visible');
		controle--;

		$('.livro_' + className).removeClass('ativo').addClass('inativo');

		if ( $('.capa').hasClass('inativo') )
			 $('.capa').removeClass('inativo').addClass('ativo');

		return false;
	});	


	$('.capa').on({
		mouseenter: function() {
			$('#mensagem').fadeToggle('fast','linear');
		},
		mouseleave: function() {
			$('#mensagem').fadeToggle('fast','linear');
		}
	});
	

});
