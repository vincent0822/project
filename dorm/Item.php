<?php

/**
 * @Entity @Table(name="item")
 **/
class Item
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $item_name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->item_name;
    }

    public function setName($name)
    {
        $this->item_name = $name;
    }
}