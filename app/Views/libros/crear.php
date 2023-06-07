<?=$cabecera?>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">ingresar datos del libro</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/from-data">
                    <div class="form-group mt-5">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <label for="imagen">Imagen:</label>
                        <input type="file" class="form-control-file" name="imagen" id="imagen">
                    </div>
                    <button class="btn btn-success mt-4" type="button">Guardar</button>
                 </form>
            </p>
        </div>
    </div>

   

<?=$pie?>

