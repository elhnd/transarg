<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE3NflDK\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE3NflDK/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE3NflDK.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE3NflDK\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerE3NflDK\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'E3NflDK',
    'container.build_id' => 'dbda5e30',
    'container.build_time' => 1564231550,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE3NflDK');
