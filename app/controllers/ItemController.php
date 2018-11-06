<?php
namespace app\controllers;

use fastphp\base\Controller;
use app\models\ItemModel;

class ItemController extends Controller
{
    private $im;

    public function __construct($controller, $action, $container)
    {
        parent::__construct($controller, $action, $container);
        $this->im = new ItemModel($container);
    }

    // 首页方法，测试框架自定义DB查询
    public function index()
    {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

        $filter = array('condition'=>array(),'value'=>array(),'orderBy'=>array());
//        if ($keyword) {
//            $filter['condition'][] = "item_name like '{$keyword}'";
//            $filter['value'][] = "";
//        }
//
//        $filter['orderBy'][] = "id DESC";

        $items = $this->im->search($filter);

//        $this->assign('title', '首页');
//        $this->assign('keyword', $keyword);
//        $this->assign('items', $items);

        $this->renderer('item/index.twig', array('title'=>'首页', 'items'=>$items));
    }

    // 查看单条记录详情
    public function detail($id)
    {
        $item = (new ItemModel())->where(["id = ?"], [$id])->fetch();

        $this->assign('title', '明细');
        $this->assign('item', $item);
        $this->render();
    }

    // 添加记录，测试框架DB记录创建（Create）
    public function add()
    {
        $data['item_name'] = $_POST['value'];
        $count = (new ItemModel)->add($data);

        $this->assign('title', '添加成功');
        $this->assign('count', $count);
        $this->render();
    }

    // 操作管理
    public function manage($id = 0)
    {
        $item = array();
        if ($id) {
            // 通过名称占位符传入参数
            $item = (new ItemModel())->where(["id = :id"], [':id' => $id])->fetch();
        }

        $this->assign('title', '管理条目');
        $this->assign('item', $item);
        $this->render();
    }

    // 更新记录，测试框架DB记录更新（Update）
    public function update()
    {
        $data = array('id' => $_POST['id'], 'item_name' => $_POST['value']);
        $count = (new ItemModel)->where(['id = :id'], [':id' => $data['id']])->update($data);

        $this->assign('title', '修改成功');
        $this->assign('count', $count);
        $this->render();
    }

    // 删除记录，测试框架DB记录删除（Delete）
    public function delete($id = null)
    {
        $count = (new ItemModel)->delete($id);

        $this->assign('title', '删除成功');
        $this->assign('count', $count);
        $this->render();
    }
}