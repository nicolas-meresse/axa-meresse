$(function(){
	//Recuperation du click et déclenchement de la fonction
	$('.menu_agences li').click(function(){
		
		if(!$(this).hasClass('active')){
		
		
			//recuperation de l'id de l'agence en splitant son ID pour recupérer l'ID de l'agence a afficher
			var id_agence = $(this).attr('id').split('_');
			// Affichage de l'agence
			$('section#'+id_agence[1]).show();
			//Recuperation de l'agence anciennement affichée grace à sa class active'
			var old_id_agence =$('.menu_agences li.active').attr('id').split('_');
			//On cache la section de l'ancienne agence
			$('section#'+old_id_agence[1]).hide();
			//On enleve la class active de l'ancienne agence pour l'ajouter à celle sur laquelle on est
			$('.menu_agences li.active').removeClass('active');
			$(this).addClass('active');
		
		
		};
		
		
	});
	
	
});