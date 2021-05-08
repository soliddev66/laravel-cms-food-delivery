<div class="custom-container">
    <div class="header-title">
        BABE,
        <span> I WANT</span>
    </div>
    <div class="header-title-mobile">
        HEY HON <br>
        LETS GET
    </div>
    <?php if(config('settings.enable_location_search')): ?>
    <form action="<?php echo e(route('front')); ?>">
        <div class="form-group<?php echo e($errors->has('location') ? ' has-danger' : ''); ?> maketto-search">
            <div class="input-group mb-4">
                <input class="form-control" name="location" id="txtlocation" value="<?php echo e($lastaddress); ?>" placeholder="" type="text" required>
                <div type="button" class="input-group-append button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <?php if($errors->has('location')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('location')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <input type="hidden" value="" name="expedition" id="expedition"/>
    </form>
    <?php else: ?>

    <form>
        <div class="form-group">
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-basket"></i></span>
            </div>
            <input name="q" class="form-control lg" value="<?php echo e(request()->get('q')); ?>" placeholder="<?php echo e(__ ('Search')); ?>" type="text">
            </div>
        </div>
    </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-danger"><?php echo e(__('Find your meal')); ?></button>
        </div>
    </form>
    <?php endif; ?>
    <div class="bring">
        BR<img src="<?php echo e(asset('images')); ?>/icons/bolt.svg">NG IT!
    </div>
    <div class="header-subtitle">
        <?php echo config('global.header_subtitle') ?>
    </div>
    <section class="section-profile-cover">
        <!-- Circles background -->
        <img class="bg-image" src="<?php echo e(config('global.search')); ?>">
    </section>
</div>

<?php /**PATH E:\WorkShop\Upwork\Robert\food-site1\resources\views/layouts/headers/search.blade.php ENDPATH**/ ?>