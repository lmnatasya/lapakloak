<?php $__env->startSection('title','Lapak Loak'); ?>
<?php $__env->startSection('navbar'); ?>
<h1 class="logo mr-auto"><a href="/" class="text-success">Lapak Loak</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/#services">Katalog</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    <a href="<?php echo e(route('halamanLogin')); ?>" class="appointment-btn scrollto">Login/Register</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<section id="services" class="services">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $katalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $katalog_barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                
                    <div class="icon-box" style="width:100%">
                    <div class="icon"><i class="icofont-heart-beat"></i></div>
                    <h4><a href="/katalog"><?php echo e($katalog_barang->nama_barang); ?></a></h4>
                    <p>Harga : <?php echo e($katalog_barang->harga); ?></p>
                    </div>
                </div>
                <div class="description col-lg-6">
                        <h1 class="font-weight-bold"><?php echo e($katalog_barang->nama_barang); ?></h1><br>
                        <hr>
                    <div class="harga">
                        <p>Harga : </p><h2>Rp. <?php echo e($katalog_barang->harga); ?></h2>
                    </div>
                    <div class="stock">
                        <p>Sisa Stock : </p> <p class="h5">Stock Terbatas < <?php echo e($katalog_barang->stok); ?> kg</p>
                    </div>
                    <br><br>
                    <a href="/home"><button type="button" class="btn btn-success">Beli Sekarang</button></a>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lapakloak\resources\views/katalog.blade.php ENDPATH**/ ?>