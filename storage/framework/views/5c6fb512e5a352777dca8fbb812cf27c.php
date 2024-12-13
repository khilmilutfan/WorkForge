<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo e(asset('css/dasboard-user.css')); ?>" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard-WorkForge</title>
  </head>
  <body onload="showWelcomeMessage()">
    <div class="sidebar">
      <div class="logo-details">
        <span class="logo_name">Work<span>Forge</span></span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="" class="active">
            <i class="bx bx-tachometer"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('lowongan.index')); ?>">
            <i class="bx bx-detail"></i>
            <span class="links_name">Daftar Lowongan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('tips.index')); ?>">
            <i class="bx bx-book"></i>
            <span class="links_name">Tips Loker</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bx bx-log-out-circle"></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
        </div>
        <div class="profile-details">
          <span class="admin_name">WorkForge Admin</span>
        </div>
      </nav>
      <div class="home-content">    
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </section>
    <div id="snackbar"></div>
  </body>
</html>
<?php /**PATH C:\laragon\www\WorkForge\resources\views/layouts/app.blade.php ENDPATH**/ ?>