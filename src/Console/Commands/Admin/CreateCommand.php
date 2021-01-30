<?php

namespace Mediabroker\Core\Console\Commands\Admin;

use DomainException;
use Illuminate\Console\Command;
use Mediabroker\Core\Models\Admin;
use Mediabroker\Core\Services\AdminService;

class CreateCommand extends Command
{
    protected $signature = 'admin:create';

    protected $description = 'Create a new admin';

    public function handle(AdminService $admin): bool
    {
        $login = strval($this->ask('Введите ваш логин'));

        try {
            $admin->validateLogin($login);
        } catch (DomainException $e) {
            $this->error($e->getMessage());
            return false;
        }

        $password = strval($this->secret('Введите ваш пароль'));

        try {
            $admin->validatePassword($password);
        } catch (DomainException $e) {
            $this->error($e->getMessage());
            return false;
        }

        $confirmation = $this->secret('Подтвердите ваш пароль');

        if ($password !== $confirmation) {
            $this->error('Пароль и подтверждение пароля должны быть одинаковыми');
            return false;
        }

        Admin::newSuperAdmin($login, $password);
        $this->info('Администратор успешно создан');

        return true;
    }
}
