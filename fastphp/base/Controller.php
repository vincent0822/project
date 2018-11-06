<?php
namespace fastphp\base;

/**
 * 控制器基类
 */
class Controller
{
    protected $controller;
    protected $action;
    protected $view;

    // 构造函数，初始化属性，并实例化对应模型
    public function __construct($controller, $action, $container)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->view = new View($controller, $action, $container);
    }

    // 分配变量
    public function assign($name, $value)
    {
        $this->view->assign($name, $value);
    }

    // 渲染视图
    public function render()
    {
        $this->view->render();
    }

    // 渲染视图
    public function renderer($twig, $data)
    {
        $this->view->renderer($twig, $data);
    }
}