{include file="header.tpl"}
<div class="content">
    <h3>La tecnica implementada es: {$mural->tecnica}</h3>


    <img src="images/{$mural->imagen}" class="img-fluid" width="1500px" alt="...">
    <h3>Descripcion del mural:</h3>
    <p>{$mural->descripcion}</p>


    <h3>Conocimientos acerca de la tecnica implementada:</h3>
    <p>{$mural->tecnicaDescripcion}</p>
    <h4>Los materiales utilizados son:</h4>
    <p>{$mural->materiales}</p>

    <h4>Para aprender:</h4>
    <p class="text-break">{$mural->historia}</p>

    <a href="home" type="button" class="btn btn-primary btn-sm" class="link">Volver</a>
</div>
{include file="footer.tpl"}