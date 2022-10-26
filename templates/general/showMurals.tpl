{include file="templates/general/header.tpl" }

{if isset($title)}
    <h1> {$title->tecnica}</h1>
{/if}

{foreach from=$murales item=$mural}

    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">

            <div class="col-md-5 p-lg-5 mx-auto my-5">
                {if isset($mural->imagen)}
                    <td><img class="img-fluid" src="{$mural->imagen}" /></td>
                {/if}
                <h1 class="display-4 fw-normal">{$mural->nombre}</h1>
                <p class="lead fw-normal">{$mural->anuario}</p>
                <a class="btn btn-outline-secondary" href="viewDetail/{$mural->id_mural}">Ver mural</a>
                {if isset($smarty.session.email)}
                <a type="button" class="btn btn-dark btn-sm" href="editMuralsForm/{$mural->id_mural}">Editar mural</a>
                <a type="button" class="btn btn-danger btn-sm" href="deleteMuralsById/{$mural->id_mural}">Eliminar mural</a>
            {/if}
            </div>

        </div>
        </main>
    {/foreach}
{include file="templates/general/footer.tpl" }