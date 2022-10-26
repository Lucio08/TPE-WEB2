{include file="templates/general/header.tpl" }
<table class="table table-bordered border-primary">
<thead>
  <tr>
    <th scope="col">Tecnicas</th>
    <th scope="col">Descripcion de la tecnica</th>
    <th scope="col">Materiales</th>
    <th scope="col">Historia</th>
    {if isset($smarty.session.email)}
      <th scope="col">Editar tecnica</th>
      <th scope="col">Eliminar tecnica</th>
    {/if}
  </tr>
</thead>
{foreach from=$types item=technique}
    <tbody>
      <tr>
        <th scope="row"><a href="viewMuralsByTypes/{$technique->id_tipo}">
        {$technique->tecnica}</a></th>
        <td>{$technique->tecnicaDescripcion}</td>
        <td>{$technique->materiales}</td>
        <td>{$technique->historia}</td>
        {if isset($smarty.session.email)}
          <td><a class="btn btn-danger btn-sm" href="deleteTypes/{$technique->id_tipo}"> Eliminar tecnica </a></td>
          <td><a class="btn btn-primary btn-sm" href="editTechniquesForm/{$technique->id_tipo}"> Editar tecnica </a></td>
        {/if}
      </tr>
    </tbody> 
{/foreach}
</table>
<a href="home" class="btn btn-primary btn-sm content">Volver</a>
{include file="templates/general/footer.tpl" }