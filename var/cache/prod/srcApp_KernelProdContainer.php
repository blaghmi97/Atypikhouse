<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBXljuKU\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBXljuKU/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerBXljuKU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerBXljuKU\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerBXljuKU\srcApp_KernelProdContainer([
    'container.build_hash' => 'BXljuKU',
    'container.build_id' => '19114bb4',
    'container.build_time' => 1680775740,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBXljuKU');
