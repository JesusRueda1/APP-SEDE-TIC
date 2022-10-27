<?php
session_start();
$doc = $_POST['documento'];  
$SQL6 = "SELECT * FROM artiuclo INNER JOIN persona ON `articulo`.`id_persona`= persona.`id` WHERE `persona`.`documento`='$doc';";
$query6 = mysqli_query($conexion,$SQL6);
$nr = mysqli_num_rows($query6);
if($nr>0){
while($rows = mysqli_fetch_array($query6)){
?>
<script>
        let boton = document.getElementById('buscar');
        let mostrar = document.getElementById('register');
        function click(){
            mostrar.innerHTML = `
                <form action="php/agregar.php" method="POST"><!-- onsubmit="event.preventDefault();onSubmit();" autocomplete="off"-->                          
                    <div class="caja">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="nom">Nombre</label> <input type="text" id="nom" name="nom" placeholder="Escriba aqui" required class="form-control" value="<?php $row['nombre']; ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="ape">Apellido</label> <input type="text" id="ape" name="ape" placeholder="Escriba aqui" required class="form-control " value="<?php $row['apellido'];?>">
                            </div>
                            <div class="col-md-3">
                                <label for="doc">Documento</label> <input type="text" id="doc" name="doc" placeholder="Escriba aqui" required class="form-control " value="<?php $row['documento'];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                
                                <label for="rol">Rol</label> 
                                <?php 
                                $SQL3 = "SELECT * FROM roles";
                                $query3= mysqli_query($conexion,$SQL3);?>
                                <select name="rol" id="rol" required class="form-control">
                                    <option value="">Selecione una opcion...</option>
                                    <?php while($row = mysqli_fetch_array($query3)){?>
                                        <option value="<?php echo $row['id']; ?>"><?php  echo $row['descripcion']; ?></option>
                                        <?php } ?>
                                    </select>
                            </div>
                            <div class="col-md-3">
                                <label for="articulo">Articulo</label> <input type="text" id="articulo" name="articulo" placeholder="Escriba aqui" required class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" id="obs" cols="28" rows="5" placeholder="Escriba aqui" required class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="submit submit-hv" type="submit" value="Guardar" style="border-radius:10px">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            `;

        }
        boton.onclick = click;<?php }?>
</script>
    <?php }else{?>
        <script>
        let boton = document.getElementById('buscar');
        let mostrar = document.getElementById('register');
        function click(){
            mostrar.innerHTML = `
                <form action="php/agregar.php" method="POST"><!-- onsubmit="event.preventDefault();onSubmit();" autocomplete="off"-->                          
                    <div class="caja">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="nom">Nombre</label> <input type="text" id="nom" name="nom" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label for="ape">Apellido</label> <input type="text" id="ape" name="ape" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label for="doc">Documento</label> <input type="text" id="doc" name="doc" placeholder="Escriba aqui" required class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                
                                <label for="rol">Rol</label> 
                                <?php 
                                $SQL3 = "SELECT * FROM roles";
                                $query3= mysqli_query($conexion,$SQL3);?>
                                <select name="rol" id="rol" required class="form-control">
                                    <option value="">Selecione una opcion...</option>
                                    <?php while($row = mysqli_fetch_array($query3)){?>
                                        <option value="<?php echo $row['id']; ?>"><?php  echo $row['descripcion']; ?></option>
                                        <?php } ?>
                                    </select>
                            </div>
                            <div class="col-md-3">
                                <label for="articulo">Articulo</label> <input type="text" id="articulo" name="articulo" placeholder="Escriba aqui" required class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" id="obs" cols="28" rows="5" placeholder="Escriba aqui" required class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="submit submit-hv" type="submit" value="Guardar" style="border-radius:10px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            `;

        }
        boton.onclick = click;
</script>
    <?php } ?>