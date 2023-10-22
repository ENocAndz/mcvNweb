<?php
namespace Dao\Version;
use Dao\Table;

class Version extends Table{
    public static function createVersion($version,$description){
        $INSSql = "
            Insert Into version (version,description,created_at)
            values(:version, :description, NOW());
        ";
        $params = [
            "version"=> $version,
            "description"=>$description
        ];
        return self::executeNonQuery($INSSql,$params);
    }

    public static function getAllVersions(){
        $sqlstr= "Select * from Version;";
        return self::obtenerRegistros($sqlstr,[]);
        
    }
}