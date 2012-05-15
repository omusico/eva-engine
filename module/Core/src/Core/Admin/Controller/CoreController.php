<?php
namespace Core\Admin\Controller;

use Eva\Mvc\Controller\ActionController,
    Eva\View\Model\ViewModel;

class CoreController extends ActionController
{
	public function indexAction()
	{
        $model = new ViewModel(array(
		));
		$model->setTemplate('admin/index');
		$this->layout('layout/admin'); 
		return $model;
	}

	public function getAction()
	{
        $model = new ViewModel(array(
		));
		return $model;
	}
}
