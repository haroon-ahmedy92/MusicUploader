<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="mt-10">
        <?php if (isset($component)) { $__componentOriginal98df7be4d2d83ea3b787e656b1f8d7eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal98df7be4d2d83ea3b787e656b1f8d7eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Search Results <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal98df7be4d2d83ea3b787e656b1f8d7eb)): ?>
<?php $attributes = $__attributesOriginal98df7be4d2d83ea3b787e656b1f8d7eb; ?>
<?php unset($__attributesOriginal98df7be4d2d83ea3b787e656b1f8d7eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98df7be4d2d83ea3b787e656b1f8d7eb)): ?>
<?php $component = $__componentOriginal98df7be4d2d83ea3b787e656b1f8d7eb; ?>
<?php unset($__componentOriginal98df7be4d2d83ea3b787e656b1f8d7eb); ?>
<?php endif; ?>

        <div class="flex-col space-y-1">

            <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if (isset($component)) { $__componentOriginalb68e90b85ed61b6fcdf5869ffe333412 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-small','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-small'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginalfbf21a19ba57d7be606d70c3d2287aa2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbf21a19ba57d7be606d70c3d2287aa2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-small-image','data' => ['src' => ''.e(asset('storage/' .$song->musicPicture)).'','alt' => 'Album Cover']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-small-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('storage/' .$song->musicPicture)).'','alt' => 'Album Cover']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbf21a19ba57d7be606d70c3d2287aa2)): ?>
<?php $attributes = $__attributesOriginalfbf21a19ba57d7be606d70c3d2287aa2; ?>
<?php unset($__attributesOriginalfbf21a19ba57d7be606d70c3d2287aa2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbf21a19ba57d7be606d70c3d2287aa2)): ?>
<?php $component = $__componentOriginalfbf21a19ba57d7be606d70c3d2287aa2; ?>
<?php unset($__componentOriginalfbf21a19ba57d7be606d70c3d2287aa2); ?>
<?php endif; ?>
                <div class="py-10 px-2 text-center space-y-5">
                    <?php if (isset($component)) { $__componentOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-small-songtitle','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-small-songtitle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($song->musicName); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22)): ?>
<?php $attributes = $__attributesOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22; ?>
<?php unset($__attributesOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22)): ?>
<?php $component = $__componentOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22; ?>
<?php unset($__componentOriginalc3cd35d4aa2b91dcaa16fc43d7e5df22); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalb0e7fb2b682c8af002c1b700dbbf6fd7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb0e7fb2b682c8af002c1b700dbbf6fd7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-small-artistname','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-small-artistname'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($song->artistName); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb0e7fb2b682c8af002c1b700dbbf6fd7)): ?>
<?php $attributes = $__attributesOriginalb0e7fb2b682c8af002c1b700dbbf6fd7; ?>
<?php unset($__attributesOriginalb0e7fb2b682c8af002c1b700dbbf6fd7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb0e7fb2b682c8af002c1b700dbbf6fd7)): ?>
<?php $component = $__componentOriginalb0e7fb2b682c8af002c1b700dbbf6fd7; ?>
<?php unset($__componentOriginalb0e7fb2b682c8af002c1b700dbbf6fd7); ?>
<?php endif; ?>    
                </div>
                <?php if (isset($component)) { $__componentOriginal9ad9ccde39e69562a943cf65a48ec886 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ad9ccde39e69562a943cf65a48ec886 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.playbutton','data' => ['song' => $song]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('playbutton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['song' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($song)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ad9ccde39e69562a943cf65a48ec886)): ?>
<?php $attributes = $__attributesOriginal9ad9ccde39e69562a943cf65a48ec886; ?>
<?php unset($__attributesOriginal9ad9ccde39e69562a943cf65a48ec886); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ad9ccde39e69562a943cf65a48ec886)): ?>
<?php $component = $__componentOriginal9ad9ccde39e69562a943cf65a48ec886; ?>
<?php unset($__componentOriginal9ad9ccde39e69562a943cf65a48ec886); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale43c51abd7980eea3a78f0d180df76b0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale43c51abd7980eea3a78f0d180df76b0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.downloadbutton','data' => ['song' => $song]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('downloadbutton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['song' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($song)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale43c51abd7980eea3a78f0d180df76b0)): ?>
<?php $attributes = $__attributesOriginale43c51abd7980eea3a78f0d180df76b0; ?>
<?php unset($__attributesOriginale43c51abd7980eea3a78f0d180df76b0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale43c51abd7980eea3a78f0d180df76b0)): ?>
<?php $component = $__componentOriginale43c51abd7980eea3a78f0d180df76b0; ?>
<?php unset($__componentOriginale43c51abd7980eea3a78f0d180df76b0); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412)): ?>
<?php $attributes = $__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412; ?>
<?php unset($__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb68e90b85ed61b6fcdf5869ffe333412)): ?>
<?php $component = $__componentOriginalb68e90b85ed61b6fcdf5869ffe333412; ?>
<?php unset($__componentOriginalb68e90b85ed61b6fcdf5869ffe333412); ?>
<?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </div>


    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH /home/haroon/Documents/mazoezi/muziki/resources/views//search.blade.php ENDPATH**/ ?>