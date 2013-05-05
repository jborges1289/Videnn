<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class gestor_de_plantillaNosotros{

    public function generarLogo(){
    return'
  
        <div id="logoNosotros">
            
                <img id="logoNosotros" src="img/nosotros/cab_nosotros.jpg" >
        </div>
        <div id="infoNosotros">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
            <p>Somos una empresa en crecimiento, caracterizada por nuestra calidad y servicio.</p>
            
            <p>Somos fabricantes, contamos con maquinas de impresión en calidad fotográfica y gran formato, asi como router de corte, maquinas de sublimado, plotters de corte y serigrafía.</p>
            
        </div>
       
        
        ';
    }
    
    public function generarInfoContacto(){
        return '
            <div id="logoContacto">
            
                <img id="logoNosotros" src="img/contacto/contacto.jpg" >
        </div>
        <div id="infoContacto">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
            <p>Nos encontramos ubicados en:<strong> C.6 No.374-1 x 7 y 9 Col. Diaz Ordaz Ave.Correa Rachó, 97130 Mérida.</strong></p>
            <p>Laboramos de:<strong> Lunes a Viernes de 09:00 a 20:00 y Sabados de 09:00 a 15:00</strong></p>
            
            <p>Telefonos:<strong> 9437961/ 9430154 </strong></p>
            <p>E-mail:<strong> direccion.videnn@gmail.com</strong></p>
            <p>Y nuestras Redes Sociales:
                <a href="http://www.facebook.com/pages/Videnn-Impresi%C3%B3n-Digital/188538617855820?fref=ts"> 
                <img id="facebook" src="img/facebook-icon1.png"></a>
                <a href="http://twitter.com/Videnn_ImpDig">
                <img id="twitter" src="img/twitter-icon1.png"></a>
            </p>
            
        </div>
        
';
    }
}
?>


