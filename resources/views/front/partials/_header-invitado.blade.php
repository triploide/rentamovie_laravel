<div class="header-dropdown-buttons hidden-xs">
    <div class="btn-group dropdown">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> Login<i class="icon-lock"></i></button>
        <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
            <li>
                <form class="login-form margin-clear" action="php/controllers/login.controller.php" method="post">
                    <div class="form-group has-feedback">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" class="form-control">
                        <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="control-label">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                        <i class="fa fa-lock form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="checkbox" name="recordarme" id="recordarme">
                        <label class="control-label" for="recordarme">Recordarme</label>
                    </div>
                    <button type="submit" class="btn btn-gray btn-sm">Login</button>
                    <span class="pl-5 pr-5">o</span>
                    <a href="/registro.php" class="btn btn-default btn-sm">Registro</a>
                    <ul>
                        <li><a href="#">¿Olvidaste tu contraseña?</a></li>
                    </ul>
                </form>
            </li>
        </ul>
    </div>
</div>