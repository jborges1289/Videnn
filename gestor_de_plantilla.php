<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gestor_de_plantilla
 *
 * @author juAN
 */
class gestor_de_plantilla {
    //put your code here


 
public function generarEncabezado(){
    
    
 return ' <div id="header">
				<img id="logo" src="img/logo_vidden2.png">
	             <ul class="dropmenu">
	               <li><a href="/index.php">Inicio</a></li>
	               <li class="dir" id="active"><a href="./index.php">Cat&aacutelogo</a>
	                 <ul>
	                   <li><a href="catalogoBotones.php">Botones</a></li>
	                   <li><a href="catalogoEspectaculares.php">Espectacules</a></li>
	                   <li><a href="catalogoLonas.php">Lonas</a></li>
                           <li><a href="catalogoEstructuras.php">Toldos y Estructuras</a></li>
                           <li><a href="catalogoOffset.php">Offset</a></li>
	                   
                     </ul>
                   </li>
	               <li><a href="#">Nosotros</a></li>
	               <li><a href="#">Contacto</a></li>
	               
                        
                         <li class="login"> 
                         
                         ¡Bienvenido! (Entrar)
                         <ul id="list_login">
                         <div id="box_login">
                        
                          <form  method="post" id="formulario_login" action="<?php echo $_SERVER[\'PHP_SELF\'] ?>" >
                        <table id="table_login">
                            
                           




                             
                            <tr>
                            <td><label for="usuario">Usuario:</label></td>
                            <td><label for="password">Contrase&ntilde;a: </label>
                           </tr>                       
                            
                            <tr>
                             <td><input type="text" id="usr" name="usr"/></td>
                             </td><td><input type="password" id="pass" name="pass" /></td>
                             <td><input type="submit" class="boton"  id="acceder" value="Iniciar" name="btn_sesion" onClick="validar(this.form);"/></td>
                             </tr>

                             
                            <tr>
                             
                              <td colspan="2"><a href="#">Reg&iacutestrate</a></td> 
                            </tr>   
                            
                            

                        </table>
                    </form>
                    </div>
                          </ul>
                         
                         </li>
                         
<li id="search"> 
                       <form action="#" method="post" id="searching"> 
                       <input class="input_search" type="text" value="Buscar en Videnn" onclick="this.value=\'\'; this.onclick=\'\'"> <input id="img_lupa" value="" type="submit" >
                       </form>
                    </li> 
                         
                 

 
          </div>
    
   
    
    ';
    
 
 
 
 
    
}




public function generarEncabezadoL(){
    
    
 return ' <div id="header">
				<img id="logo" src="img/logo_vidden2.png">
	             <ul class="dropmenu">
	               <li><a href="/index.php">INICIO</a></li>
	               <li class="dir" id="active"><a href="./index.php">CAT&AacuteLOGO</a>
	                 <ul>
	                   <li><a href="#">BOTONES</a></li>
	                   <li><a href="#">ESPECTACULARES</a></li>
	                   <li><a href="#">LONAS</a></li>
	                   <li><a href="#">NIÑAS</a></li>
                     </ul>
                   </li>
	               <li><a href="#">NOSOTROS</a></li>
	               <li><a href="./contacto.php">CONTACTO</a></li>
	               <li id="search"> <form action="#" method="post" id="searching"> 
                       <input class="input_search" type="text" value="BUSCAR EN VIDENN" > <input id="img_lupa" value="Buscar" type="submit" >
                       </form>
                         </li>
                 </ul>
                 

 
          </div>
    
   
    
    ';


}


public function generarRegistro(){
    
    return '
        
<div id="categorias">
			  	<div class="listaCont">
				  	
			  	</div>
                                
			  	<div id="categoria1" class="anuncio">
				  	<div  id="activado" class="anuncios">
				  		<img onclick="javascript:mostrar_ventana(\'159854\',\'Cacharel\',\'$500\',\'img/Damas/1.png\');" width="200px" height="150px" src="img/Damas/1.png">
				  	</div>
				  	
				  	
			  	</div>
			  </div>










<div id="form">
        
<form id="formulario"> 
                      
                      <table class="regist">
                          
                          <tr>
                              <td colspan="2">
                                  Nombre
                              </td>
                              
                        
                          </tr>    
                        
                          
                          <tr>
                              
                                <td>
                                  <input type="text" value="Nombre">
                              </td>
                              
                               <td>
                                  <input type="text" value="Apellidos">
                              </td>
                              
                          </tr>
                          
                         
                          
                           <tr>
                              <td>
                                  Nombre de usuario
                              </td>
                              
                              </tr>
                              <tr>
                              <td>
                                  <input type="email" value="Correo electrónico">
                              </td>
                              
                          </tr>                          
                          
                           <tr>
                              <td>
                                  Contrase&ntilde;a
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <input type="password">
                              </td>
                              
                          </tr>                          
                          
                          
                          <tr>
                              <td>
                                  Fecha de nacimiento
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td>
                                  <input type="date">
                              </td>
                          </tr>
                          
                          
                           <tr>
                              <td>
                                 Sexo
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td>
                                  <select>
                                      
                                      <option > Selecciona tu sexo </option>
                                      <option > Hombre </option>
                                      <option > Mujer </option>
                                      
                                  </select>
                              </td>
                          </tr>
                          
                          
                            <tr>
                              <td>
                                 Tel&eacute;fono
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td>
                                  <input type="text">
                              </td>
                          </tr>
                          
                          <tr>
                              <td colspan="2"> <input id="btn_account" type="submit" value="Crear cuenta"></td>
                          </tr>
                          
                      </table>
                      </form>



</div>


     ';
    
    
    
    
}





public function generarEditarRegistro(){
   
    
    return '
        
<div id="categorias">
			  	<div class="listaCont">
				  	
			  	</div>
                                
			  	<div id="categoria1" class="anuncio">
				  	<div  id="activado" class="anuncios">
				  		<img onclick="javascript:mostrar_ventana(\'159854\',\'Cacharel\',\'$500\',\'img/Damas/1.png\');" width="200px" height="150px" src="img/Damas/1.png">
				  	</div>
				  	
				  	
			  	</div>
			  </div>










<div id="form">
        
<form id="formulario"> 
                      
                      <table class="regist">
                          
                          <tr>
                              <td colspan="2">
                                  Nombre
                              </td>
                              
                        
                          </tr>    
                        
                          
                          <tr>
                              
                                <td>
                                  <input type="text" value="Nombre">
                              </td>
                              
                               <td>
                                  <input type="text" value="Apellidos">
                              </td>
                              
                          </tr>
                          
                         
                          
                           <tr>
                              <td>
                                  Nombre de usuario
                              </td>
                              
                              </tr>
                              <tr>
                              <td>
                                  <input type="email" value="Correo electrónico" disabled>
                              </td>
                              
                          </tr>                          
                          
                           <tr>
                              <td>
                                  Contrase&ntilde;a
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <input type="password">
                              </td>
                              
                          </tr>                          
                          
                          
                          <tr>
                              <td>
                                  Fecha de nacimiento
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td>
                                  <input type="date">
                              </td>
                          </tr>
                          
                          
                           <tr>
                              <td>
                                 Sexo
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td>
                                  <select>
                                      
                                      <option > Selecciona tu sexo </option>
                                      <option > Hombre </option>
                                      <option > Mujer </option>
                                      
                                  </select>
                              </td>
                          </tr>
                          
                          
                            <tr>
                              <td>
                                 Tel&eacute;fono
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td>
                                  <input type="text">
                              </td>
                          </tr>
                          
                          <tr>
                              <td colspan="2"> <input id="btn_account" type="submit" value="Crear cuenta"></td>
                          </tr>
                          
                      </table>
                      </form>



</div>


     ';
    
    
    
    
}

    
    
    
    
}






?>
