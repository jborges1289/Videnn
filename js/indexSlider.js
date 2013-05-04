/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
		$("#featured").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
			show: function(event, ui){
				$('#featured .ui-tabs-panel .info').hide();
				var infoheight=$('.info', ui.panel).height();
				$('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
			}
		}).tabs("rotate", 5000, true);
		$('#featured').hover(
			function(){ $('#featured').tabs('rotate', 0, true); },
			function(){ $('#featured').tabs('rotate', 5000, true); }
		);
		$('#featured .ui-tabs-panel a.hideshow').click(function(){
			if($(this).text()=='Ocultar'){
				$(this).parent('.info').animate({ 'height': '0px' }, 500);
				$(this).text('Mostrar');
			}
			else{
				$(this).parent('.info').animate({ 'height': '70px' }, 500);
				$(this).text('Ocultar');
			}
			return false;
		});
	});


