<?php

/* Profile */

Breadcrumbs::for('admin.profile.index', function ($trail) {
    $trail->push('Профиль пользователя', route('admin.profile.index'));
});
/* Settings */

Breadcrumbs::for('admin.settings.index', function ($trail) {
    $trail->push('Настройки', route('admin.settings.index'));
});
