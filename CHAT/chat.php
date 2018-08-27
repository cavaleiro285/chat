<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
         <meta charse=UTF-8>
         <title>chat</title>
         <link href="css/style.css" rel="stylesheet" type="text/css"/>
         <script type="text/javascript" src="js/jquery.js">    
         </script>
         <script type="text/javascript">
         	$.noConflict();
         </script>
    </head>
    <doby>
    	<aside id="users_online">
    		<ul>
    		<?php for ($i=1; $i<=8; $i++):?>
    			<li id="5">
    			   <div class="imgSmall"><img src="fotos/michael.jpg" border="0"/>
    			   </div>
    			   <a href="#" id="1:2" class="comecar">michael lucas</a>
    			   <span id="2" class="status on">
    			   </span>
    			</li>
            <?php endfor;?>
    		</ul>
    	</aside>
     <aside id="chats">
       <div class="window" id="janela_x">
        <div class="header_window"><a href="#" class="close">X</a> <span class="name">fulano de tal</span> <span id="2" class="status on"></span>
        </div>
        <div class="body">
       	<div class="mensagens">
               <ul>
               	 <li class="eu"><p> teste de mensagens</p>
                 </li>
                    <li class="">
                 		<div class="imgSmall"><img src="fotos/michael.jpg" border="0"/>
                 		</div>
                 		<p> teste de mensagens</p>
                 	</li>
               </ul>
        </div>
        		<div class="send_message" id="3:5">
                <input type="text" name="mensagem" class="msg" id="1:2"/>
        		</div>
        	</div>
        </div>
     </aside>
    </doby>
</html>