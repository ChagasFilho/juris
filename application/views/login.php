      <div class="container">

          <form class="form-signin" method="post" action="<?= base_url() ?>index.php/Dashboard/logar">
              <h2 class="form-signin-heading">Acesso Restrito</h2>
              <label for="inputEmail" class="sr-only">E-mail</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
              <label for="inputPassword" class="sr-only">Senha</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          </form>

      </div> <!-- /container -->