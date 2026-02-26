<div class="col-md-4 mb-4">
    <div class="card shadow-lg border-0">

        <?php if($product->img): ?>
            <img src="<?php echo e(Storage::url($product->img)); ?>" 
                 class="card-img-top" 
                 alt="<?php echo e($product->name); ?>">
        <?php endif; ?>
        <img src=" <?php echo e($product->img); ?>" alt="">
        <div class="card-body">
            <h3 class="card-title"><?php echo e($product->name); ?></h3>
            <p class="card-text"><?php echo e($product->description); ?></p>

            <p class="fw-bold fs-4 text-success">
                € <?php echo e(number_format($product->price, 2, ',', '.')); ?>

            </p>

            <a href="#" class="btn btn-warning w-100">Dettagli</a>
        </div>
    </div>
</div><?php /**PATH C:\Users\client\wa\esercizidatabases\laravel_09_giovanni_miglio\resources\views/components/card.blade.php ENDPATH**/ ?>