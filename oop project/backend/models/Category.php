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
        $data = $db->select("categories","*")->orderBy('parent')->getAll();

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

    public static function getWithChild()
    {
        $allCats = self::getAll();
        $preCats = self::prepareCategories($allCats);
        // var_dump($categories);

        // self::method1($preCats[0],$preCats);

        // $res = self::method2($allCats);
        // print_r($res);
    }

    private static function method1($categories,$all)
    {
        echo "<ol>";
        foreach($categories as $key => $category)
        {
            echo "<li> $category";
            if(isset($all[$key]))
            {
                self::method1($all[$key],$all);
            }
            echo "</li>";
        }
        echo "</ol>";
    }

    private static function method2($elements,$parentId = 0)
    {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent'] == $parentId) {
                $children = self::method2($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }
    
    private static function method3($categories)
    {
        // var_dump($categories);
        // foreach ($categories as  $category) {
        //     if($category['parent'] == '0')
        //     {
        //         $result[$category['id']] = $category;
        //     }
        //     else
        //     {
        //         $haveParent = true;
        //         $element[$category['id']] = $category;
        //         while ($haveParent)
        //         {
        //             foreach ($categories as $value) {
        //                 if($category['id'] == $value['parent'])
        //                 {
        //                     $element[$category['id']] []= $value;
        //                 }
        //             }
        //         }
        //     }
        // }
        // var_dump($result);
    }

    private static function prepareCategories($categories)
    {
        foreach($categories as $category)
        {
            $result[$category['parent']][$category['id']] = $category['category'];
        }
        return $result;
    }

}