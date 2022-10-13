{include file="templates/general/header.tpl" }


{foreach from=$types item=technique}

  <ul class="list-group">
    <li class="list-group-item"><a href="viewMuralsByTypes/{$technique->id_tipo}">
        {$technique->tecnica}</a> -
      {if isset($smarty.session.email)}
        <a class="btn btn-danger btn-sm" href="deleteTypes/{$technique->id_tipo}"> Eliminar tecnica </a> - <a
          class="btn btn-primary btn-sm" href="editTechniquesForm/{$technique->id_tipo}"> Editar tecnica </a>
      </li>
    {/if}
   
  </ul>
{/foreach}

<a href="home" class="btn btn-primary btn-sm content">Volver</a>
{include file="templates/general/footer.tpl" }