<?php

class SaleReport extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;


    public function settings()
    {
        return array(
                 "categorias"->array(
                  "productos"=>array(
                      "connectionString"=>"mysql:host=localhost;dbname=tutorial",
                      "username"=>"root",
                      "password"=>"",
                      "charset"=>"utf8"
                  )
                 )
         );
    }

    public function setup()
    {
        $this->src("automaker")
        ->query("
             SELECT *
             FROM categorias
         ")
         ->pipe($this->dataStore("result"));
    }
}
