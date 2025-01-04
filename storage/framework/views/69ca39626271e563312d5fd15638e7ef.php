<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music App</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/app.js']); ?>
</head>

<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

    <header class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <div class="text-xl font-bold"><a href="/">Musify</a></div>
        <div class="w-1/3">

            <form action="/search" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" placeholder="Search for songs, artists..."
                    class="w-full px-4 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300 text-black"
                    name="searchvalue">
            </form>

        </div>
        <div>
            <button class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-200">Profile</button>
        </div>
    </header>

    <main class="p-6 flex-grow">
        <?php echo e($slot); ?>

    </main>

    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

</body>

</html>
<?php /**PATH /home/haroon/Documents/mazoezi/muziki/resources/views/components/layout.blade.php ENDPATH**/ ?>