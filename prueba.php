<?php 


?>
<html>
    <head>
        <title>
            Tabla de registro
        </title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="diseño3.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>
  
        <div class = "container w-50">           
                <form class = "row g-3 mt-3">
                    
                    <div class = "col-md-12">
                        <label for = "idinput" class = "form-label">ID</label>
                            <input type = "number" class = "form-control" id = "idinput" placeholder = "Escribe tu ID">
                    </div>

                    <div class = " col-md-9">
                        <label for = "nombreinput" class = "form-label"> Nombre </label>
                            <input type = "text" class = "form-control" id = "nombreinput"  placeholder = "Escribe tu nombre">
                            
                    </div>
                       
                    <div class = "col-md-9">
                        <label for = "apellidoinput" class = "form-label"> Apellidos </label>
                            <input type = "text" class = "form-control" id = "apellidoinput"  placeholder = "Escribe tu apellido">
                    </div>

                    <div class = "col-md-12">
                        <label for = "gradoinput" class = "form-label"> Grado </label>
                            <input type = "number" class = "form-control" id = "gradoinput"  placeholder = "Escribe tu grado">
                    </div>

                    <div class = "col-md-12">
                        <label for = "grupoinput" class = "form-label"> Grupo </label>
                            <input type = "text" class = "form-control" id = "grupoinput"  placeholder = "Escribe tu grupo">
                    </div>

                    <div class = "col-md-12">
						
                        <button type="submit" class="btn btn-outline-success">Registrate</button>
                    </div>
					
					
					 <img src="Orgullo.jpeg" class="img-fluid" alt="">
                    
                </form>

        </div>
   

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>