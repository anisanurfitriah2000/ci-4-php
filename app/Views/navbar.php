<?php $actual_link = "$_SERVER[REQUEST_URI]"; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Home') ?>">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('about')?>">About</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('product')?>">Product</a>
              </li>      
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('history')?>">History</a>
              </li>  
              <?php if(! session() ->get('logged_in')) :?>
              <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
                </li> 
                <?php else:?>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout') ?>">logout</a>
                </li> 
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>