{include file="templates/general/header.tpl"}

<div class="content">
  <form class="row g-3" method="POST" action="addTechniques">
    <div class="mb-3">  
      <label for="input_techniques" class="form-label">Tecnica:</label>
      <input type="text" name="input_techniques" rows="3" required>
    </div>
    <div class="col-12">
      <label for="input_materials" class="form-label">Materiales:</label>
      <input type="text" class="form-control" name="input_materials" rows="3" required>
    </div>
    <div class="mb-3">
      <label for="input_description" class="form-label">Descripcion: </label>
      <input class="form-control" name="input_description" rows="3" required>
    </div>
    <div class="mb-3">
      <label for="input_history" class="form-label">Historia: </label>
      <input class="form-control" name="input_history" rows="3" required>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Guardar tecnica</button>
    </div>
  </form>
</div>
{include file="templates/general/footer.tpl"}