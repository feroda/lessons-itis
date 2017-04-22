<?php
  require "header.php";
?>
      <div class="starter-template">
        <h1>Il mio nome è Luca</h1>
      </div>
      <div style="text-align: center;">
        <p class="lead">Nato a Fabriano e continuo a vivere a Fabriano dopo essere passato per la fantastica Bologna</p>
        <img src="static/imgs/fabriano.jpg" alt="Centro di storico di Fabriano" />
        <p class="caption">Questa immagine la carico dal path relativo <span class="code">static/imgs/fabriano.jpg</span>
        ma per i file statici (file multimediali in genere) che devono essere serviti direttamente dal web server
        è meglio identificare un percorso assoluto tramite path assoluto <span class="code">/static/imgs/fabriano.jpg</span> (ad esempio).
        Oppure URL completo <span class="code">https://static.miosito.com/imgs/fabriano.jpg</span> perché voglio che i file statici
        vengano recuperati direttamente (senza passare per l'interprete)
        e quindi agevolare la configurazione di una direttiva dedicata nel webserver (path assoluto)
        o di un virtualhost dedicato (URL completo con altro hostname).</p>
      </div>

    </div><!-- /.container -->

<?php
  require "footer.php";
?>
