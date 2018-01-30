<?php

/*
 * Author: PunkVv <punkv@qq.com>
 */

namespace app\admin\controller\permission;

use app\common\service\permission\AdminUserService;
use app\common\VController;

class AdminUserController extends VController
{
    public function index()
    {
        $service = new AdminUserService();
        $data = $service->getList($this->param);

        return $data;
    }

    public function create()
    {
        $service = new AdminUserService();
        $data = $service->createData($this->param);

        return $data;
    }

    public function update()
    {
        $service = new AdminUserService();
        $data = $service->updateData($this->param);

        return $data;
    }

    public function delete()
    {
        $service = new AdminUserService();
        $data = $service->deleteData($this->param['id']);

        return $data;
    }

    public function changeStatus()
    {
        $service = new AdminUserService();
        $data = $service->changeStatus($this->param['id'], $this->param['type']);

        return $data;
    }

    public function changePassword()
    {
        $service = new AdminUserService();
        $data = $service->changePassword($this->param);

        return $data;
    }

    public function roles()
    {

    }

    public function createRole()
    {

    }
}