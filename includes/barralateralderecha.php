<?php require_once 'includes/helpers.php'; ?>

<!-- ********************CAJA LATERAL DERECHA******************** -->
        <div id="contenedorlateralderecho">
            <aside id="cajalateral">
                <div id="sesion" class="bloque">
                    <h3>IDENTIFICATE</h3>
                    <form action="sesion.php" method="POST">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" />
                        
                        <label for="clave">Contraseña</label>
                        <input type="password" name="clave" />
                        
                        <input type="submit" value="Entrar">
                    </form>
                </div>

                <div id="registro" class="bloque">
                    <h3>REGISTRATE</h3>
                    
                    <!-- Mostrar errores -->
                    <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                            <?= $_SESSION['completado']; ?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alerta alerta-error">
                            <?= $_SESSION['errores']['general'] ?>
                        </div>
                    <?php
                        endif;
                    ?>
                    
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'correo') : ''; ?>
                        <label for="clave">Contraseña</label>
                        <input type="password" name="clave" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'clave') : ''; ?>
                        
                        <input type="submit" name="submit" value="Registrar">
                    </form>
                    <?php borrarErrores(); ?>
                </div>
            </aside>
        </div>