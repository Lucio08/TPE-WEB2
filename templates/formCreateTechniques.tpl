{include file="header.tpl"}
<form class="row g-3" method="POST" action="addTechniques">
  <div class="col-md-6">
    <label for="input_techniques" class="form-label">Tecnica:</label>
    <input type="text" class="form-control"  name="input_techniques">
  </div>
  <div class="col-12">
    <label for="input_materials" class="form-label" >Materiales:</label>
    <input type="text" class="form-control" name="input_materials">
  </div>
  <div class="col-12">
    <label for="input_description" class="form-label" >Descripcion de la tecnica:</label>
    <input type="text" name="input_description">
  </div>
  <div class="col-md-6">
    <label for="input_history" class="form-label">Historia:</label>
    <input type="text" class="form-control"  name="input_history">
  </div>
 

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar tecnica</button>
  </div>
</form>
{include file="footer.tpl"}}

