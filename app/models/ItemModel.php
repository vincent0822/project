<?php
namespace app\models;

use fastphp\base\Model;
use fastphp\db\Db;
use fastphp\entity\Entity;

/**
 * 用户Model
 */
class ItemModel extends Model
{
    private $em;
    protected $table = 'feature_config';

    public function __construct($container)
    {
        $this->em = $container['em'];
    }

    public function search($filter = array())
    {
//        $em = Entity::getEntityManager();

        $qb = $this->em->createQueryBuilder()->select('i')->from('Item', "i", "i.id");
        $result = $qb->getQuery()->getResult();

        return $result;
//        $arr_list = $this->where(["feature_id = :id"], [':id' => 1187])->fetch();
//        $arr_list['config'] = json_decode($arr_list['config'], true);
//        $arr_list['config']['langs']['id']['name'] = 'indonesia';
//        var_dump(json_encode($arr_list['config']));
//        var_dump($arr_list['config']);die;
//        return $arr_list;
    }
}