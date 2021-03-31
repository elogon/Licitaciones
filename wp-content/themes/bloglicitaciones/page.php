<?php get_header(); ?>

<!-- Este será el formulario de Contaco y Redes Sociales -->
  <div class="Contacto container-fluid bg-dark" id="Contacto">
    <div class = "row">
      <div class="col">
      <p class="display-4 text-right text-light">Contacto</p>
        <div class="md-4"></div>
    </div>
    </div>
      <div class="row">
        <div class="col-sm-6">
         <form>
           <div class="form-group">
            <label for="FormControlInput1">Nombre</label>
            <input type="email" class="form-control" id="FormControlInput1" placeholder="nombre">
           </div>
          <div class="form-group">
            <label for="FormControlInput2">Email address</label>
            <input type="email" class="form-control" id="FormControlInput2" placeholder="nombre@ejemplo.com">
           </div>
  <div class="form-group">
    <label for="FormControlTextarea1">Mensaje</label>
    <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
  </div>
           <button type="submit" class="btn btn-secondary">Enviar</button>
</form>
          </div>
        <div class="col-sm-6 redes text-light">
          <p class="lead">
            Si quieres ponerte en contacto conmigo, llena el formulario adjunto y con tus datos y te respondeté a la brevedad. Además me puedes contactar a través de mis redes sociales.</p>
          <a href="https://www.facebook.com/victor.mira.7" target="_blank" class="fa fa-facebook"></a>
          <a href="https://twitter.com/ReakktorL" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.linkedin.com/in/victor-mira-5a736833/" target="_blank" class="fa fa-linkedin"></a>
          <a href="https://github.com/Reakktor" target="_blank" class="fa fa-github"></a>
        </div>
      </div>
</body>
<?php get_footer(); ?>