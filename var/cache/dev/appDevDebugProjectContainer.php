<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerImb0mwm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerImb0mwm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerImb0mwm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerImb0mwm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerImb0mwm\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Imb0mwm',
    'container.build_id' => '5a0dfa64',
    'container.build_time' => 1520116397,
));
