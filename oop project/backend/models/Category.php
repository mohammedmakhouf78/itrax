<?php


namespace OOP\Modules;
use \OOP\DataBase\DB;

class Category
{
    public static function create($category)
    {
        $db = new DB();
        $result = $db->insert('categories',$category)->excute();
        if($result)
        {
            return $category;
        }
        return false;
    }

    public static function getAll()
    {
        $db = new DB();
        $data = $db->select("categories","*")->orderByDesc('id')->getAll();

        return $data;
    }

    public static function update($data)
    {
        $db = new DB();
        $result = $db->update('categories',$data)->where('id',"=",$data['id'])->excute();
        return $result;
    }

    public static function delete($id)
    {
        $db = new DB();
        $result = $db->delete('categories')->where('id',"=",$id)->excute();
        return $result;
    }

    public static function getCategoryById($id)
    {
        $db = new DB();
        $data = $db->select('categories','category')->where('id','=',$id)->getRow();
        return $data;
    }
}