<!DOCTYPE html>
<html>
<head>
    <title>MENSAJE</title>
</head>
<body>
     
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v5.0&appId=586488355499245&autoLogAppEvents=1"></script>
        
       <p><center><font face= "comic sans ms" size= 8 color= "red">DETALLE DE ORDENES</font></center></p>
       <p><strong> Direccion :</strong>{{ $datos['cantidad']}}</p>
       <p><strong> Codigo:</strong>{{ $datos['precio_orden']}}</p> 
       <p><strong> Telefono:</strong>{{ $datos['total']}}</p> 
       
       <div class="fb-comments" data-href="http://localhost:8000/cliente" data-width="100%" data-numposts="3"></div>
  
</body>
</html>
