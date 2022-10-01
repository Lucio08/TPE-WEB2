{include file="header.tpl"}
<div class="content" >
    <h3>{$mural->tecnica}</h3>
    
    <img src="images/{$mural->imagen}" height="500px" widht="900" text-align="center"alt="">
    
    <p>{$mural->tecnicaDescripcion}</p>
    <p>{$mural->descripcion}</p>
    <p>{$mural->historia}</p>
    <p>{$mural->materiales}</p>
    <a href="home" class="link">Volver</a>
</div>
{include file="footer.tpl"}