{include file="templates/general/header.tpl"}
<div class="content">
        <ul>
        {if isset($mural->imagen)}
            <li><img class="img-fluid" src="{$mural->imagen}" ></li>
        {/if}
            <li> Descripcion del mural: </li> <p>{$mural->descripcion}</p>
            <li>Tecnica: </li><p>{$mural->tecnica}</p>
            <li>Lugar: </li><p>{$mural->lugar}</p>
            <li>Ubicacion: </li><p>{$mural->ubicacion}</p>
        </ul>
        <a href="home" type="button" class="btn btn-primary btn-sm" class="link">Volver</a>
    </div>
    {include file="templates/general/footer.tpl"}