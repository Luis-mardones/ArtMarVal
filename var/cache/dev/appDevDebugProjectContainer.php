<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXvgkimp\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXvgkimp/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXvgkimp.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXvgkimp\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXvgkimp\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xvgkimp',
    'container.build_id' => 'd0def5c7',
    'container.build_time' => 1536626806,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXvgkimp');
