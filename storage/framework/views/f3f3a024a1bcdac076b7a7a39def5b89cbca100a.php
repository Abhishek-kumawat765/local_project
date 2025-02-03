<?php
$sidebar1 = Helper::sidebar1();
?>


<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " 
     data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"      
     >

            
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="<?php echo e(url('/')); ?>">
                        <img alt="Logo" src="<?php echo e(env('IMAGE_SHOW_PATH') . $setting->logo); ?>" onerror="this.src='<?php echo e(env('IMAGE_SHOW_PATH') . 'default/logo.png'); ?>'" class=" app-sidebar-logo-default"/>
            
            <img alt="Logo" src="<?php echo e(env('IMAGE_SHOW_PATH') . $setting->mini_logo); ?>" onerror="this.src='<?php echo e(env('IMAGE_SHOW_PATH') . 'default/mini_logo.png'); ?>'" class="h-25px app-sidebar-logo-minimize"/>
        </a>
       
            <div 
                id="kt_app_sidebar_toggle" 
                class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate " 
                data-kt-toggle="true" 
                data-kt-toggle-state="active" 
                data-kt-toggle-target="body" 
                data-kt-toggle-name="app-sidebar-minimize"
                >
                
                <i class="ki-duotone ki-black-left-line fs-3 rotate-180"><span class="path1"></span><span class="path2"></span></i>        </div>
            <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div
                id="kt_app_sidebar_menu_scroll"
                class="scroll-y my-5 mx-3"       
                data-kt-scroll="true"
                data-kt-scroll-activate="true"
                data-kt-scroll-height="auto"     
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" 
                data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true"
            >
                <!--begin::Menu-->
                <div 
                    class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"       
                    id="#kt_app_sidebar_menu"                     
                    data-kt-menu="true" 
                    data-kt-menu-expand="false"
                >
                 
                    <?php if(!empty($sidebar1)): ?>
                    <?php $__currentLoopData = $sidebar1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $sidebar2 = Helper::sidebar2($side1->id);
                        ?>
                    <!--begin:Menu item-->
                    <div  class="menu-item pt-5" >
                        <!--begin:Menu content-->
                            <div  class="menu-content" ><span class="menu-heading fw-bold text-uppercase fs-7"><?php echo e($side1->sidebar1 ?? ''); ?></span></div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    
                        <?php if(!empty($sidebar2)): ?>
                        <?php $__currentLoopData = $sidebar2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $sidebar3 = Helper::sidebar3($side1->id, $side2->id);
                            ?>
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <!--begin:Menu link-->
                        
                <!--end:Menu link-->
                
                <?php if($side2->sub_menu == 1): ?>
                    <span class="menu-link"><span class="menu-icon"><i class="ki-duotone <?php echo e($side2->icon ?? ''); ?> fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title"><?php echo e($side2->sidebar2 ?? ''); ?></span><span class="menu-arrow"></span></span>
                <?php else: ?>
                    <a class="menu-link" href="<?php echo e(url('/')); ?>/<?php echo e($side2->url ?? ''); ?>"><span class="menu-icon">
                        <i class="fa <?php echo e($side2->icon ?? 'fa-calendar-alt'); ?> fs-1"></i>
                       </i>
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title"><?php echo e($side2->sidebar2 ?? ''); ?></span></a>
                <?php endif; ?>
                                
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;" kt-hidden-height="125">
                    
                    <?php if(!empty($sidebar3)): ?>
                    <?php $__currentLoopData = $sidebar3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $sidebar4 = Helper::sidebar4($side1->id, $side2->id, $side3->id);
                        ?>
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <!--begin:Menu link-->
                        <?php if($side3->sub_menu == 1): ?>
                        <span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title"><?php echo e($side3->sidebar3 ?? ''); ?></span><span class="menu-arrow"></span></span>
                        <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>/<?php echo e($side3->url ?? ''); ?>" class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title"><?php echo e($side3->sidebar3 ?? ''); ?></a> 
                        <?php endif; ?>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;" kt-hidden-height="167">
                            
                            <?php if(!empty($sidebar4)): ?>
                            <?php $__currentLoopData = $sidebar4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $sidebar5 = Helper::sidebar5($side1->id, $side2->id, $side3->id, $side4->id);
                                ?>
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <?php if($side4->sub_menu == 1): ?>
                                    <span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title"><?php echo e($side4->sidebar4 ?? ''); ?></span><span class="menu-arrow"></span></span>
                                <?php else: ?>
                                    <div class="menu-item"><a class="menu-link" href="<?php echo e(url('/')); ?>/<?php echo e($side4->url ?? ''); ?>"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title"><?php echo e($side4->sidebar4 ?? ''); ?></span></a></div>
                                <?php endif; ?>
                                
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    
                                    <?php if(!empty($sidebar5)): ?>
                                    <?php $__currentLoopData = $sidebar5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="/metronic8/demo1/utilities/modals/general/invite-friends.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title"><?php echo e($side5->sidebar5 ?? ''); ?></span></a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    
                                    <?php if(!empty($sidebar5)): ?>
                                    <?php $__currentLoopData = $sidebar5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="/metronic8/demo1/utilities/modals/general/invite-friends.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title"><?php echo e($side5->sidebar5 ?? ''); ?></span></a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <!--end:Menu sub-->
    </div>
                        <!--end:Menu item-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
        <!--begin::Footer-->
        <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
            <a 
                href="https://preview.keenthemes.com/html/metronic/docs" 
                class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" 
                data-bs-toggle="tooltip" 
                data-bs-trigger="hover" 
                data-bs-dismiss-="click" 
                title="200+ in-house components and 3rd-party plugins">
        
                <span class="btn-label">
                    Docs & Components
                </span>
        
                <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span class="path2"></span></i>    </a>
        </div>
        <!--end::Footer-->    
        </div>
    </div>

</div>
<!--end::Sidebar--> <?php /**PATH C:\xampp\htdocs\local_project\resources\views/common/sidebar.blade.php ENDPATH**/ ?>