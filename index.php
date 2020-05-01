<?php include 'functions.php'; ?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Chitarre ~ Rufo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/dist/styles/main.css">

</head>
<body>

    <section id="header">
        <div class="container">

            <h1>Le mie chitarre</h1>

            <p class="lead">Negli anni ne ho collezionate un po'...</p>

            <ol>
                <?php foreach ($chitarre as $c): ?>
                    <li>
                        <a href="#<?php echo $c->id ?>">
                            <?php echo $c->title() ?>
                            (<?php echo $c->anno() ?>)
                        </a>
                    </li>
                <?php endforeach ?>
            </ol>

            <hr>

            <?php foreach ($chitarre as $c): ?>

                <article class="py-5" id="<?php echo $c->id ?>">
                    <div class="card">
                        <div class="card-header">

                            <h3>
                                <?php echo $c->title() ?>
                            </h3>

                            <small>Ultimo aggiornamento <?php echo $c->update('d/m/Y H:i') ?></small>

                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-3">

                                    <dl>
                                        <dt>Anno</dt> <dd><?php echo $c->anno() ?></dd>
                                        <dt>Acquisita</dt> <dd><?php echo $c->acquisita() ?></dd>
                                        <dt>Seriale</dt> <dd><?php echo $c->seriale() ?></dd>
                                        <dt>Voto</dt> <dd><?php echo $c->voto() ?></dd>
                                        <dt>Produzione</dt> <dd><?php echo $c->produzione() ?></dd>
                                        <dt>Costo</dt> <dd><?php echo $c->costo() ?></dd>
                                        <dt>Scala Corde</dt> <dd><?php echo $c->scalaCorde() ?></dd>
                                        <dt>Accordatura</dt> <dd><?php echo $c->accordatura() ?></dd>
                                    </dl>
                                </div>
                                <div class="col-lg-3">

                                    <dl>
                                        <dt>Corpo</dt> <dd><?php echo $c->corpo() ?></dd>
                                        <dt>Top</dt> <dd><?php echo $c->top() ?></dd>
                                        <dt>Manico</dt> <dd><?php echo $c->manico() ?></dd>
                                        <dt>Tastiera</dt> <dd><?php echo $c->tastiera() ?></dd>
                                        <dt>Numero tasti</dt> <dd><?php echo $c->tasti() ?></dd>
                                        <dt>Colore</dt> <dd><?php echo $c->colore() ?></dd>
                                        <dt>Tipo di ponte</dt> <dd><?php echo $c->ponte() ?></dd>
                                        <dt>Configurazione pickup</dt> <dd><?php echo $c->configurazione() ?></dd>
                                        <dt>Tipo di pickups</dt> <dd><?php echo $c->pickups() ?></dd>
                                        <dt>Corde</dt> <dd><?php echo $c->corde() ?></dd>
                                    </dl>

                                </div>
                                <div class="col-lg">

                                    <dl>
                                        <?php if ($c->descrizione()): ?>
                                            <dt>Descrizione</dt>
                                            <dd><?php echo $c->descrizione() ?></dd>
                                        <?php endif; ?>

                                        <?php if ($c->modifiche()): ?>
                                            <dt>Modifiche</dt>
                                            <dd><?php echo $c->modifiche() ?></dd>
                                        <?php endif; ?>
                                    </dl>

                                </div>
                            </div>

                        </div>
                    </div>
                </article>

            <?php endforeach; ?>

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="/dist/scripts/main.js" charset="utf-8"></script>

</body>
</html>
