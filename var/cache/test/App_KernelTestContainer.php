<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA3rXPsa\App_KernelTestContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA3rXPsa/App_KernelTestContainer.php') {
    touch(__DIR__.'/ContainerA3rXPsa.legacy');

    return;
}

if (!\class_exists(App_KernelTestContainer::class, false)) {
    \class_alias(\ContainerA3rXPsa\App_KernelTestContainer::class, App_KernelTestContainer::class, false);
}

return new \ContainerA3rXPsa\App_KernelTestContainer([
    'container.build_hash' => 'A3rXPsa',
    'container.build_id' => 'c056d18a',
    'container.build_time' => 1657294194,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA3rXPsa');
