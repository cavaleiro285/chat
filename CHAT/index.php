<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
         <meta charse=UTF-8>
         <title>chat</title> 
         <style type="text/css">
         *{margin:0 padding:0; box-sizing:border-box;}
         body{background:#ebebeb;}
          .right{float:right;}  
          .botao{padding: 6px 8px; background:linear-gradient(to bottom, #069, #09f 130%); border:1px solid white;
            font: 16px tahoma, arial; color:white; border-radius: 5px;}

            .formulario{
                position:absolute;
                top:50%; 
                left: 50%; 
                width:812px center; 
                height:200px center; 
                background:white; 
                border-radius: 6px; 
                margin-left:-406% center;
                margin-top:-100% center;
                padding:10px;
                box-shadow:#ccc 1px 1px 30px;

            }
            h1{
                float:left;
                width:100px;
                margin-bottom:10px;
                font:24px "Trebuchet MS", tahoma, arial;
                font-weight:bold;
                color:#069
                padding:5px;
                text-align:center;
            }
            .formulario label{
                float:left;
                width:100%;
            }
            .formulario label span{
                float:left;
                width:100%;
                font:15px tahoma, arial;
                color:#666;
                margin-bottom:10px;
            }
            .formulario label input{
              float:left;
              width:100%;
              padding:6px;
              background:white;
              border-radius:5px;
              border: 1px solid #999;
              outline:none;
            }
         </style>

    </head>    
    <doby>
        <div class="formulario">
            <h1>Bem vindo a VM, Faça login</h1>
            <form action="post" enctype="multipart/form-data">
               <label>
                   <span>Informe seu E-mail</span>
                   <input type="text" name="email" placeholder="Seu E-mail aqui"/>
               </label> 

             <input type="submit" value="Entrar" class="botao right"/>

            </form>
            
        </div>
    </doby>
</html>        