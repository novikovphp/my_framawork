<?php
namespace Model\System;

use Model\System\Sql;

class Router {
    public $id;

    public function Router($method, $request, $language) {
        $result = Sql::dbconnect()->query("SELECT `type`, `id` FROM `urls` WHERE `url` = '".Sql::clear($request)."' AND `language_id` = '$language'");
        $result = $result->fetch_array(MYSQLI_ASSOC);
        if(isset($result['id'])) {
            $this->id = $result['id'];
            switch ($result['type']) {
                case "static":
                    $result = Sql::dbconnect()->query("SELECT * FROM `static` WHERE `id` = '".$this->id."'");
                    $result = $result->fetch_array(MYSQLI_ASSOC);
                    $result['type'] = "static";
                    return $result;
                    break;
                case "page":
            }
        } else {
            return false;
        }
    }
}

