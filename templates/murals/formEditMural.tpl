{include file="templates/general/header.tpl"}
<div class="content">
    <form class="row g-3" method="POST" action="editMural/{$mural->id_mural}" enctype="multipart/form-data">
    
        <select name="nameCategories">

            <option value="{$mural->id_tipo}" selected>{$mural->tecnica}</option>
            {foreach from=$nameCategories item=$name}
                {if $name->tecnica!=$mural->tecnica}//mural que estoy editando
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
            <label for="input_name" class="form-label">Imagen: </label>
            <input type="file" class="form-control" value='{$mural->imagen}' name="input_name" rows="3"></input>
        </div>
        <div class="col-auto">
            <button type="submit" name="idEdit" class="btn btn-primary mb-3" value='{$mural->id_mural}'>Confirmar cambios</button>
        </div>
       
    </form>
    <div class="col-auto">
    <a href="home" class="btn btn-primary btn-sm content">cancelar</a>
   </div>
</div>
{include file="templates/general/footer.tpl"}