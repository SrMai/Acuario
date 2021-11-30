
            <article id="contacto">
                <h2 class="major">Contacto</h2>
                <form action="" method="GET">
                    <div class="fields">
                        <div class="field half">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" type="text" id="nombre" placeholder="Escribe tú nombre" required>
                        </div>
                        <div class="field half">
                            <label for="nombre">Apellidos</label>
                            <input name="apellidos" type="text" id="apellidos" placeholder="Escribe tus apellidos" required>
                        </div>
                        <div class="field half">
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" id="sexo">
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                            </select>
                        </div>
                        <div class="field half">
                            <label for="nombre">Correo</label>
                            <input name="correo" type="email" id="correo" placeholder="email@gmail.com" required>
                        </div>
                        <div class="field half">
                            <label for="poblacion">Población:</label>
                            <select name="poblacion" id="poblacion">
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Zapopan">Zapopan</option>
                                <option value="Tonala">Tonala</option>
                                <option value="Tlajomulco">Tlajomulco</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="9" cols="90" placeholder="Escribe redacta tu mensaje (max 400 caracteres)" required></textarea>
                        </div>
                        <p>
                            <input type="checkbox" name="info" id="info" checked="checked" />
                            <label for="info">Deseo recibir información y ofertas.</label>
                        </p>
                        <p>
                            <input type="checkbox" name="condiciones" id="condiciones" />
                            <label for="condiciones">Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos.</label>
                        </p>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Enviar" class="primary" /></li>
                    </ul>
                </form>
            </article>