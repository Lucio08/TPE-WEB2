{include file="templates/general/header.tpl"}

<div class="content">
  <form method="POST" action="verify">
    <div class="row mb-3">
      <label for="userEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="userEmail">
      </div>
    </div>

    <div class="row mb-3">
      <label for="userPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" name="userPassword">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

  {if $error}
    <div class="alert alert-danger mt-3">
      {$error}
    </div>
  {/if}


  <div class="content">
    <p>No tenes cuenta? Ingresa como <a href="home">usuario publico</a> </p>
  </div>

</div>
{include file="templates/general/footer.tpl"}