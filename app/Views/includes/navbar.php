<?php $page = basename($_SERVER['PHP_SELF']);?>
<div class="p-5 bg-primary text-white text-center">
  <h1>CodeIgniter</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="<?= base_url() ?>">Sajedul Tech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?= ($page == 'index.php') ? 'active' : ''; ?> " href="<?= base_url() ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($page == 'about') ? 'active' : ''; ?> " href="<?= base_url() ?>/about">About</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($page == 'contact') ? 'active' : ''; ?> " href="<?= base_url() ?>/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($page == 'student') ? 'active' : ''; ?> " href="<?= base_url() ?>/student">Students</a>
      </li>
    </ul>
    
  </div>

</nav>