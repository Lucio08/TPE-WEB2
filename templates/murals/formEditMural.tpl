{include file="templates/general/header.tpl"}
<div class="content">
    <form class="row g-3" method="POST" action="editMural/{$mural->id_mural}">
    
        <select name="nameCategories">
            <option value="{$technique->id_tipo}" selected>{$technique->tecnica}</option>
            {foreach from=$nameCategories item=$name}
                {if $name->tecnica != $technique->tecnica}
                    <option value="{$name->id_tipo}">{$name->tecnica}</option>
                {/if}
                
            {/foreach}
        </select>
        <div class="mb-3">
            <label for=" muralEdit" class="form-label">Nombre: </label>
            <input class="form-control" value='{$mural->nombre}' name="muralEdit" rows="3"
                required></input>
        </div>
        <div class="mb-3">
            <label for="descriptionEdit" class="form-label">Descripcion: </label>
            <input class="form-control" value='{$mural->descripcion}' name="descriptionEdit" rows="3"
                required></input>
        </div>
        <div class="mb-3">
            <label for="ubicacionEdit" class="form-label">Ubicacion: </label>
            <input type="text" class="form-control" value='{$mural->ubicacion}' name="ubicacionEdit" rows="3" required></input>
        </div>
        <div class="mb-3">
            <label for="lugarEdit" class="form-label">Lugar: </label>
            <input type="text" class="form-control" value='{$mural->lugar}' name="lugarEdit" rows="3" required></input>
        </div>
        <div class="mb-3">
            <label for="anuarioEdit" class="form-label">Anuario: </label>
            <input type="number"  class="form-control" value='{$mural->anuario}' name="anuarioEdit" rows="3" required></input>
        </div>
        <div class="mb-3">
            <label for="imagenEdit" class="form-label">Imagen: </label>
            <input type="text" class="form-control" value='{$mural->imagen}' name="imagenEdit" rows="3" required></input>
        </div>
        <div class="col-auto">
            <button type="submit" name="idEdit" class="btn btn-primary mb-3" value='{$mural->id_mural}'>Confirmar
                cambios</button>
        </div>
    </form>
</div>
{include file="templates/general/footer.tpl"}