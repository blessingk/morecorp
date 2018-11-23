

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <?php echo $__env->make('partials.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Add Product</button>
          </div>
        </div>
      </div>

      <div class="card-body">
          <form method="POST" action="<?php echo e(route('store.product')); ?>">
              <h3>Add new product</h3>
              <?php echo csrf_field(); ?>

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Product Name')); ?></label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>">

                      <?php if($errors->has('name')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('name')); ?></strong>
                          </span>
                      <?php endif; ?>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="sku" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Sku')); ?></label>

                  <div class="col-md-6">
                      <input id="sku" type="text" class="form-control<?php echo e($errors->has('sku') ? ' is-invalid' : ''); ?>" name="sku" value="<?php echo e(old('sku')); ?>">

                      <?php if($errors->has('sku')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('sku')); ?></strong>
                          </span>
                      <?php endif; ?>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="price" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Price')); ?></label>

                  <div class="col-md-6">
                      <input id="Price" type="text" class="form-control<?php echo e($errors->has('price') ? ' is-invalid' : ''); ?>" name="price" >

                      <?php if($errors->has('price')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('price')); ?></strong>
                          </span>
                      <?php endif; ?>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>

                  <div class="col-md-6">
                      <input id="description" type="textarea" class="form-control<?php echo e($errors->has('price') ? ' is-invalid' : ''); ?>" rows="3" name="description" >

                      <?php if($errors->has('description')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('description')); ?></strong>
                          </span>
                      <?php endif; ?>
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          <?php echo e(__('Add Product')); ?>

                      </button>
                  </div>
              </div>
          </form>
      </div>

    </main>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>