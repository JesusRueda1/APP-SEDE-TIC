<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar articulos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                            <div class="col-md-3">
                                <label for="mail">Correo</label> <input type="mail" id="mail" name="mail" placeholder="Escriba aqui" required class="form-control ">
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
                        </div>
                      </div>
                      <br/>
                      <div class="modal-footer">

                        <input class="submit" type="submit" value="Guardar">
                      </div>
                    </form>
            
        
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>