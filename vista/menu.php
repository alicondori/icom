<?php include("includes/header.php") ?>
<section>
    <div class="contenedor">
        <div class="main">
            <div class="contenedor_detalle">

                <div class="imagen">
                    <form action="" class="formulario">
                        <p>Subir Imagen</p>
                        <input type="file" name="imagen" accept="image/*" id="archivo" required>
                        <label for="archivo" class="btn_subir"><i class="fas fa-upload"></i> seleccionar imagen</label>
                        <input type="text" name="autor" placeholder="autor" required>
                        <textarea name="descripcion" rows="3" placeholder="escriba una descripcion (max 200 caracteres)" maxlength="200"></textarea>
                        <input type="submit" class="btn" name="imagen" value="guardar">
                    </form>
                </div>
                <div class="publicaciones">
                    <div class="tarjeta">
                        <div class="thumb">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="descripcion">
                            <a href="" class="usuario"><i class="fas fa-user-tie"></i> monitor fantasma</a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo accusantium itaque
                                voluptatibus recusandae quaerat tempore, nulla placeat? Totam temporibus placeat
                                facilis, deserunt harum, vero aut rerum minima tenetur repellendus assumenda.</p>
                            <div class="acciones">
                                <a href=""><i class="far fa-thumbs-up"></i></a>
                                <a href=""><i class="far fa-comment-dots"></i></a>
                                <a href=""><i class="far fa-share-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="thumb">
                            <img src="img/2.jpg" alt="">
                        </div>
                        <div class="descripcion">
                            <a href="" class="usuario"><i class="fas fa-user-tie"></i> monitor fantasma</a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo accusantium itaque
                                voluptatibus recusandae quaerat tempore, nulla placeat? Totam temporibus placeat
                                facilis, deserunt harum, vero aut rerum minima tenetur repellendus assumenda.</p>
                            <div class="acciones">
                                <a href=""><i class="far fa-thumbs-up"></i></a>
                                <a href=""><i class="far fa-comment-dots"></i></a>
                                <a href=""><i class="far fa-share-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="thumb">
                            <img src="img/1.jpg" alt="">
                        </div>
                        <div class="descripcion">
                            <a href="" class="usuario"><i class="fas fa-user-tie"></i> monitor fantasma</a>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo accusantium itaque
                                voluptatibus recusandae quaerat tempore, nulla placeat? Totam temporibus placeat
                                facilis, deserunt harum, vero aut rerum minima tenetur repellendus assumenda.</p>
                            <div class="acciones">
                                <a href=""><i class="far fa-thumbs-up"></i></a>
                                <a href=""><i class="far fa-comment-dots"></i></a>
                                <a href=""><i class="far fa-share-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("includes/footer.php") ?>