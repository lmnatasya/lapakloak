<?php $__env->startSection('title','AdminPage'); ?>
<?php $__env->startSection('container'); ?>
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"></i> Dashboard</h3>
                <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                <li></i>Dashboard</li>
                </ol>
            </div>
            </div>
        
            <!-- page start-->
            <div class="row">
            <div class="col-sm-6">
                <section class="panel">
                <header class="panel-heading">
                    Pencatatan Hidroponik
                </header>
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Penanaman</th>
                        <th>Jenis Tumbuhan yang ditanam</th>
                        <th>Suhu Ruangan</th>
                        <th>Pupuk</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $pertumbuhan_tanaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pertumbuhan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($pertumbuhan->tanggal_penanaman); ?></td>
                        <td><?php echo e($pertumbuhan->jenis_tanaman); ?></td>
                        <td><?php echo e($pertumbuhan->suhu_ruangan); ?></td>
                        <td><?php echo e($pertumbuhan->nutrisi); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </section>
                <a href="/pencatatan"><button class="btn btn-info">  Lihat Selengkapnya</button></a>
            </div>
            <div class="col-sm-6">
                <section class="panel">
                <header class="panel-heading">
                    Katalog
                </header>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tanaman</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $katalog_tanaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $katalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($katalog->nama_tanaman); ?></td>
                        <td><?php echo e($katalog->stok); ?></td>
                        <td><?php echo e($katalog->harga); ?></td>
                        <td><?php echo e($katalog->gambar); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </section>
                <a href="/katalogAdmin"><button class="btn btn-info">Lihat Selengkapnya</button></a>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lapakloak\resources\views/admin.blade.php ENDPATH**/ ?>