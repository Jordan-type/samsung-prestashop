<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH32efjp\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH32efjp/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerH32efjp.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerH32efjp\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerH32efjp\appProdProjectContainer([
    'container.build_hash' => 'H32efjp',
    'container.build_id' => 'c39f429e',
    'container.build_time' => 1610394881,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH32efjp');
