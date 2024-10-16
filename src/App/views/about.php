<?php

include $this->resolve("includes/_header.php"); ?>
<!-- Start Main Content Area -->
<section
  class="container mx-auto mt-12 p-4 bg-black-50 shadow-md border border-gray-200
  rounded text-white"
>
  <!-- Page Title -->
  <h3>About Page</h3>

  <hr/>

  <!-- Escaping Data -->
  <p>Escaping Data: <?php
      echo e($dangerousData); ?> </p>
</section>
<!-- End Main Content Area -->

<?php
//footer
include $this->resolve("includes/_footer.php"); ?>

