<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYwmhr3g\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYwmhr3g/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerYwmhr3g.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerYwmhr3g\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerYwmhr3g\appProdProjectContainer([
    'container.build_hash' => 'Ywmhr3g',
    'container.build_id' => '26292e3d',
    'container.build_time' => 1672409037,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYwmhr3g');
