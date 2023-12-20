<?php $__env->startSection('title','About'); ?>

<?php $__env->startSection('navbar'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('navbar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mb-3" style="max-width: 700%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/benzemacrop.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Mustafa Fathur Rahman</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus rem tenetur
                        deserunt, itaque, autem asperiores voluptates, magni deleniti officiis minus nemo porro impedit!
                        Doloribus, laborum nam sed laboriosam, qui suscipit ipsa assumenda ratione saepe labore culpa quae
                        obcaecati necessitatibus quisquam.</p>
                    <a href="https://www.instagram.com/mustafa_fathur/" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
    </div>

<a href="home" class="btn btn-primary">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TugasBootcamp3\resources\views/about.blade.php ENDPATH**/ ?>