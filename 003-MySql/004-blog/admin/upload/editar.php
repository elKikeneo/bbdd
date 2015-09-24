<?php $title="Mi Perfil" ?>
<?php include './col/header.php'; ?>


        <div class="login">
            <form action="" method="post">
                <h1>Editar</h1>
                <input type="text" name="nombre" placeholder="Nombre" required autofocus>
                <input type="email" name="email" placeholder="user@email.com" required>
                
                <input type="submit" value="Crear Cuenta">
                
                <!--Ocultar este enlace si no queremos que nadie se registre-->
                <a href="index.php">Ya soy usuario</a> 
                
                
                
            </form>
        </div>


<?php include './col/footer.php'; ?>