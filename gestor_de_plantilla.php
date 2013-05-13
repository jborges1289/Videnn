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
	               <li><a href=".">Inicio</a></li>
	               <li class="dir" id="active"><a href="./index.php">Cat&aacutelogo</a>
	                 <ul>
	                   <li><a href="catalogoBotones.php">Botones</a></li>
	                   <li><a href="catalogoEspectaculares.php">Espectaculares</a></li>
	                   <li><a href="catalogoLonas.php">Lonas</a></li>
                           <li><a href="catalogoEstructuras.php">Toldos y Estructuras</a></li>
                           <li><a href="catalogoOffset.php">Offset</a></li>
	                   
                     </ul>
                   </li>
	               <li><a href="seccionNosotros.php">Nosotros</a></li>
	               <li><a href="seccionContactos.php">Contacto</a></li>
	               
                        
                         <li class="login"> 
                         
                         Iniciar sesi&oacute;n
                         <ul id="list_login">
                         <div id="box_login">
                        
                          <form action="login.php" method="post" id="formulario_login" >
                        <table id="table_login">
                
                            <tr>
                            <td><label for="usuario">Usuario:</label></td>
                            <td><label for="password">Contrase&ntilde;a: </label>
                           </tr>                       
                            
                            <tr>

                             <td><input type="text" id="user" name="user" required="required"/></td>
                             <td><input type="password" id="pass" name="pass" required="required" /></td>

                             <td><input type="submit" class="boton"  id="acceder" value="Entrar" name="btn_sesion"/></td>
                             </tr>

                        </table>
                    </form>
                    </div>
                          </ul>
                         
                         </li>
                         
<li id="search"> 
                       <form action="ResultadosBusqueda.php" method="get" id="searching"> 
                       <input class="input_search" name = "buscar" type="text" value="buscar" onclick="this.value=\'\'; this.onclick=\'\'"> <input id="img_lupa" value="" type="submit" name="Busqueda" value ="Buscar" >
                       </form>
                    </li> 
                         
                 

 
          </div>
    
   
    
    ';
    
 
 
 
 
    
}




public function generarEncabezadoL(){
    
    
 return ' <div id="header">
				<img id="logo" src="img/logo_vidden2.png">
	             <ul class="dropmenu">
	               <li><a href=".">INICIO</a></li>
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
				  
<div id="banner_registro"> <h1> Registrarse </h1></div>


			  	</div>
                                


			  	<div id="categoria1" class="anuncio">
				  	<div  id="activado" class="anuncios">
				  		<img onclick="javascript:mostrar_ventana(\'159854\',\'Cacharel\',\'$500\',\'img/Damas/1.png\');" width="200px" height="150px" src="img/Damas/1.png">
				  	</div>
				  	
				  	
			  	</div>
			  </div>










<div id="form">
        


<form id="formulario" method="get" action="ControladorUsuario.php" > 
                      
                      <table class="regist">
                          
                          <tr>
                              <td colspan="2">
                                  Nombre
                              </td>
                              
                        
                          </tr>    
                        
                          
                          <tr>
                              
                                <td>
                                  <input type="text" name="nombre" value="Nombre completo">
                              </td>
                              
                              
                              
                          </tr>
                          
                         
                          
                           <tr>
                              <td>
                                  Nombre de usuario
                              </td>
                              
                              </tr>
                              <tr>
                              <td>
                                  <input type="text" name="usuario" value="Usuario">
                              </td>
                              
                          </tr>                          
                          
                           <tr>
                              <td>
                                  Contrase&ntilde;a
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <input type="password" name="contrasenia" value="12345">
                              </td>
                              
                          </tr>                          
                          
                          
                          <tr>
                              <td>
                                  Repetir contrase&ntilde;a 
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td>
                                  <input type="password" value="12345">
                              </td>
                          </tr>
                          
                          <tr>
                          

                              <td colspan="2"> 
                                    <input type="hidden" name="registrar_usuario" value="registrar"/>
                                    <input id="btn_account" name="registrarse" type="submit" value="Crear cuenta">
                                  
                                    
                                    <input type="button" onclick="document.location=\'index.php\'"  name="btn_regresar" class="boton"  id="naranja" value="Regresar"/>
</                              </td>
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

 public function generadorDePie(){
     
    return '
        
<div>


<table id="footer" align="center">

<tr>

<th>
<a href=".">Inicio</a>
</th>

<th>
<a href="./index.php">Cat&aacute;logo</a>
</th>

<th>
<a href="seccionNosotros.php">Nosotros</a>
</th>

<th>
<a href="seccionContactos.php">Contacto</a>
</th>

</tr>

<tr>
<td>
</td>
<td id="footer2">
<a href="catalogoBotones.php"> Botones </a>
<td>
</tr>

<tr>
<td>
</td>
<td id="footer2">
<a href="catalogoEspectaculares.php"> Espectaculares</a>
</td>
</tr>

<tr>
<td>
</td>
<td id="footer2">
<a href="catalogoLonas.php"> Lonas  </a>
</td>
</tr>

<tr>
<td>
</td>
<td id="footer2">
<a href="catalogoEstructuras.php"> Toldos & Estructuras </a>
</td>
</tr>

<tr>
<td>
</td>
<td id="footer2">
<a href="catalogoOffset.php"> Offset </a>
</td>


</tr>




</table>



<div>


';
     
     
 }   
   
 public function generadorCopyright(){
     
     return ' <div id = "copyright">
          
COPYRIGHT&copy GAMES 2013

         </div>';
 }
 
    
    
}






?>
 2013

         </div>';
 }
 
    
    
}






?>
