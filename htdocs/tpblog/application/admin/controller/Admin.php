<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use think\Controller;
use think\db;
class Admin extends Controller
{
	public function lst()
	{
		// $model = new AdminModel();
		$list = AdminModel::paginate(3);
		$this->assign('list',$list);
		return $this->fetch();
	}
}