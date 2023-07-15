<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee List</a></li>
            </ul>

            <hr class="d-md-none text-white-50">
    <div class="dropdown my-2 ms-md-auto">
                <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuProfile" data-bs-toggle="dropdown" aria-expanded="false">
                   <i class="bi-person-circle me-1"></i><?php echo e(Auth::user()->name); ?>

                </button>
                <ul class="dropdown-menu dropdown-menu-md-end" aria-labelledby="dropdownMenuProfile">
                  <li>
                    <a href="<?php echo e(route('profile')); ?>" class="dropdown-item"><i class="bi-person-fill me-2"></i> My Profile</a>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                     <i class="bi-box-arrow-left me-2"></i> Log Out
                 </a>

                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                     <?php echo csrf_field(); ?>
                 </form>
                  </li>
                </ul>
              </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\fengg\praktikum-4\resources\views/layouts/nav.blade.php ENDPATH**/ ?>