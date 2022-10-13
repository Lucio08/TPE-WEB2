{include file="templates/general/header.tpl" }
<div class="content">
  <form class="row g-3" action="addMurals" method="POST">

    <select name="name-categories">
      {foreach from=$techniques item=technique}
        <option value="{$technique->id_tipo}">{$technique->tecnica}</option>
      {/foreach}
    </select>

    <div class="col-md-6">
      <label for="name-murals" class="form-label">Nombre: </label>
      <input type="text" class="form-control" name="name-murals">
    </div>
    <div class="col-md-6">
      <label for="name-descriction" class="form-label">Descripcion: </label>
      <input type="text" class="form-control" name="name-description" rows="3">
    </div>
    <div class="col-12">
      <label for="name-location" class="form-label">Ubicacion: </label>
      <input type="text" class="form-control" name="name-location">
    </div>
    <div class="col-12">
      <label for="name-place" class="form-label">Lugar: </label>
      <input type="text" class="form-control" name="name-place">
    </div>
    <div class="col-md-6">
      <label for="name-year" class="form-label">Año: </label>
      <input type="number" class="form-control" name="name-year">
    </div>
    <div class="col-md-6">
      <label for="name-img" class="form-label">Imagen: </label>
      <input type="text" class="form-control" name="name-img">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Agregar mural</button>
    </div>
  </form>
</div>
{include file="templates/general/footer.tpl" }