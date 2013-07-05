$(function() {
	// Stuff to do as soon as the DOM is ready;
	$('a[title]').tooltips();	
	$( 'audio' ).audioPlayer();

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

			$('.livro_' + className).removeClass('inativo').addClass('ativo');

		} else {

			$('.abas_inativas').find('.ativo').removeClass('ativo').addClass('inativo');

		}

		//e daí abre a página
	});

	$('.abas_inativas a').click(function() {
		var className = $(this).attr('class');
		$(this).css('visibility','hidden');
		$('.abas_ativas').find('.' + className).css('visibility','visible');
		controle--;

		$('.livro_' + className).removeClass('ativo').addClass('inativo');

		if ( $('.capa').hasClass('inativo') )
			 $('.capa').removeClass('inativo').addClass('ativo');

	});	

});
