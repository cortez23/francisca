<form action="envio.php" class="contact_form" method="POST">
  <ul>
    <li><!-- <label for="nombre">Nombre</label> --><br>
      <input class="input formu" type="text" name="nombre" minlength="3" id="nombre" placeholder="Nombre" required></li>

    <li><!-- <label for="email">Email</label> --><br>
      <input class="input formu" type="text" name="email" id="email" placeholder="Email" required></li>

    <li><!-- <label for="">Asunto</label> --><br>
      <!-- <input class="input formu" type="text" name="asunto" minlength="7" id="asunto" placeholder="Asunto" required></li> -->
    <select class="input formu " id="asunto" type="text" name="asunto" minlength="7" placeholder="Asunto" required >
      <option value="" hidden style="color:#ccc;">Asunto...</option>
      <option>Clases Calzado Bebé</option>
      <option>Clases Calzado Niño</option>
      <option>Clases Calzado Adulto</option>
      <option>Información de las clases</option>
      <option>Otros..</option>
    </select></li>

    <li><!-- <label for="mensaje">Texto</label> --><br>
      <textarea  class="texto-coment formu" name="mensaje" id="mensaje" cols="50" rows="8" placeholder="....." required></textarea></li>

    <li><button onclick="myFunction()" class="submit" name="submit" type="submit" value="submit">Enviar</button></li>
  </ul>
</form>
