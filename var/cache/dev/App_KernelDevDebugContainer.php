<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM05Wh6E\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM05Wh6E/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM05Wh6E.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM05Wh6E\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerM05Wh6E\App_KernelDevDebugContainer([
    'container.build_hash' => 'M05Wh6E',
    'container.build_id' => '822dccf2',
    'container.build_time' => 1704385555,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM05Wh6E');
