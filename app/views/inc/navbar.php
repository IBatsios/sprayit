<!--Author: Ioannis Batsios-->
<nav class="navbar navbar-expand-lg navbar-dark mb-3" style="background-color: rebeccapurple;">
    <div class="container" style="padding: 0 150px">
        <a class="navbar-brand" href="<?php echo URL_ROOT; ?>"><?php echo SITE_NAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <?php if(Session::isLoggedIn()) : ?>
                    <li class="nav-item">
                        Hello, <?php echo Session::getField('user_email'); ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL_ROOT . '/' . LOGOUT_PATH; ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL_ROOT . '/' . LOGIN_PATH; ?>">Login</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo URL_ROOT . '/' . REGISTER_PATH; ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>