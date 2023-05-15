function CrearPlato(){
    $.ajax({
        url:"../view/crearplatos.php",
        type:"post",
        beforeSend: function(){
         $("#cargar").html('<div class="loading"><img src="loader.gif" alt="Cargando platos" /></div>');
   },
   success: function(vista){
        $("#cargar").html(vista);
   }});}

   

   function insertarPlato (nombre,precio,tipo){

    $.ajax({
            url:"../view/insertarplatos.php?nombre="+nombre+"&precio="+precio+"&tipo="+tipo,
            type:"post",
            beforeSend: function(){
             $("#cargar").html('<div class="loading"><img src="loader.gif" alt="Cargando platos" /></div>');
       },
       success: function(vista){
            $("#cargar").html(vista);
       }});
     
    }
    function verPlatos(){
        $.ajax({
            url:"../view/verneverasgraficas.php",
            type:"post",
            beforeSend: function(){
             $("#cargar").html('<div class="loading"><img src="loader.gif" alt="Cargando platos" /></div>');
       },
       success: function(vista){
            $("#cargar").html(vista);
       }});}


       function verPedidos(){
        $.ajax({
            url:"../view/pedidos.php",
            type:"post",
            beforeSend: function(){
             $("#cargar").html('<div class="loading"><img src="loader.gif" alt="Cargando platos" /></div>');
       },
       success: function(vista){
            $("#cargar").html(vista);
       }});}
    

   