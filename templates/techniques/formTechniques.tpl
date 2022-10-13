{include file="templates/general/header.tpl"}
<div class="content">
  <form class="row g-3" method="POST" action="editTechnique/{$tipo->id_tipo}">

    <div class="mb-3">
      <label for="techniquesEdit" class="form-label">Tecnica: </label>
      <input type="text" class="form-control" value="{$tipo->tecnica}" name="techniquesEdit" placeholder="" required>
    </div>
    <div class="mb-3">
      <label for="descriptionEdit" class="form-label">Descripcion: </label>
      <input class="form-control" value="{$tipo->tecnicaDescripcion}" name="descriptionEdit" rows="3" required></input>
    </div>
    <div class="mb-3">
      <label for="materialsEdit" class="form-label">Materiales: </label>
      <input class="form-control" value="{$tipo->materiales}" name="materialsEdit" rows="3" required></input>
    </div>
    <div class="mb-3">
      <label for="historyEdit" class="form-label">Historia: </label>
      <input class="form-control" value="{$tipo->historia}" name="historyEdit" rows="3" required></input>
    </div>
    <div class="col-auto">
      <button type="submit" name="idEdit" class="btn btn-primary mb-3" value="{$tipo->id_tipo}">Confirmar
        edicion</button>
    </div>
  </form>
</div>
{include file="templates/general/footer.tpl"}