<?php

/**
 * Description of ModelDb
 *
 * @author Alberto
 */
class ModelDb {
    /*
     * inizializzo l'array mapperDb con i campi delle rispettive 
     * tabelle del database creato
     */

    static $mapperDb = Array(
        "tables" => Array(
            "usersTable" => "users",
            "computersTable" => "computers",
            "depotTable" => "depot",
        ),
        "usersTable" => Array(
            "id" => "id",
            "email" => "email",
            "password" => "password",
            "name" => "name",
            "surname" => "surname",
            "address" => "address",
            "identity" => "identity",
            "credit" => "credit",
        ),
        "computersTable" => Array(
            "id" => "id",
            "type" => "type",
            "brand" => "brand",
            "model" => "model",
            "inces" => "inces",
            "ram" => "ram",
            "os" => "os",
            "cpu" => "cpu",
            "storage" => "storage",
            "gpu" => "gpu",
            "description" => "description",
        ),
        "depotTable" => Array(
            "id_seller" => "id_seller",
            "id_computer" => "id_computer",
            "nitems" => "nitems",
            "price" => "price",
        )
    );

}
