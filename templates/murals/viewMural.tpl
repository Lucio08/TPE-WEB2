{include file="templates/general/header.tpl"}
<div class="content">
<img src="images/{$mural->imagen}" class="img-fluid" width="1500px" alt="...">
<table class="table table-bordered border-primary">
    <thead>
        <tr>
           
            <th scope="col">Descripción del mural</th>
            <th scope="col">Técnica</th>
            <th scope="col">Descripción de la técnica</th>
            <th scope="col">Materiales</th>
            <th scope="col">Historia</th>
        </tr>
    </thead>
    <tbody>
    <tr>
      
      <td>{$mural->descripcion}</td>
      <th scope="row">{$mural->tecnica}</th>
      <td>{$mural->tecnicaDescripcion}</td>
      <td>{$mural->materiales}</td>
      <td>{$mural->historia}</td>
    </tr>
    </tbody>
</table>
<a href="home" type="button" class="btn btn-primary btn-sm" class="link">Volver</a>
</div>
{include file="templates/general/footer.tpl"}