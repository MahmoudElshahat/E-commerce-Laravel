<?php $__env->startSection('content'); ?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?????">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="??????"> الاقسام الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item active">إضافة قسم رئيسي
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> إضافة قسم رئيسي </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('admin.includes.alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <img src="./public/images/1636018394-branddd.jpg" alt="Slide">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    

                                    <div class="caption-group">
                                        
                                        
                                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                                    </div>
                                    <form class="form" action="<?php echo e(route('update.item',$items-> id)); ?>"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        
                                        

                                        <div class="form-group">
                                            <label> صوره المنتج </label>

                                            <label id="projectinput7" class="file center-block">
                                                <span class="file-custom"></span>
                                                <input type='file'  name='photo'>
                                            </label>
                                            <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> بيانات المنتج </h4>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> اسم المنتج</label>
                                                                <input type="text" value="<?php echo e($items-> name); ?>" id="name"
                                                                       class="form-control"
                                                                       placeholder="  "
                                                                       name="name">
                                                                
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> سعر المنتج </label>
                                                                    <input type="text" value="<?php echo e($items-> price); ?>" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="price">
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                        </div>
                                                        

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> تقيم المنتج </label>
                                                                    <input type="text" value="<?php echo e($items-> rate); ?>" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="rate">
                                                                           
                                                                            
                                                                            <div class="small-ratings"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                                        
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                        </div>
                                                    </div>

                                                        
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group mt-1">
                                                                    <label for="cars">اسم القسم :</label>
                                                                    
                                                                        <select name="category" id="cars">
                                                                        
                                                                        
                                                                          <option value="<?php echo e($items->id); ?>"><?php echo e($items->name); ?></option>
                                                                        

                                                                        </select>

                                                                    
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            </div>
                                                            


                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <input type="checkbox" value="1"
                                                                       name="active"
                                                                       id="switcheryColor4"
                                                                       class="switchery" data-color="success"
                                                                       <?php if($items->active > 0): ?> checked <?php endif; ?>/>
                                                                <label for="switcheryColor4"
                                                                       class="card-title ml-1">الحالة</label>

                                                                
                                                                <span class="text-danger"> </span>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                        </div>


                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/jewelry33/resources/views/admin/items/edite.blade.php ENDPATH**/ ?>