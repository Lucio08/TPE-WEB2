{include file="templates/header.tpl" }
{foreach from=$murales item=$mural}
    <main>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/{$mural->imagen}" alt="">
                            <div class="card-body">
                                <p class="card-text">{$mural->nombre}</p>
                                <p class="card-text">{$mural->lugar}</p>
                                <p class="card-text">Año:   {$mural->anuario}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-dark" href="viewDetail/{$mural->id_mural}">Ver detalles</a>
                                    </div>
                                    <small class="text-muted">{$mural->ubicacion}</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
{/foreach}
{include file="footer.tpl" }