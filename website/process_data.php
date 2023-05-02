<?php

    if (isset($_POST["query"])) {
        require_once __DIR__ . 'db_connect.php';

        $data = <<<XML
        <?xml version='1.0' encoding='UTF-8'?>
        <body></body>
        XML;
        
        $xml = new SimpleXMLElement($data);
        
        $condition = preg_replace('/[^A-Za-z0-9\- ]/','',$_POST["query"]);

        $sql = "SELECT id, Product_name FROM product WHERE Product_name LIKE '%" . $condition . "%'
                ORDER BY id DESC LIMIT 10";

        $result = $conn->query($sql);

        $replace_str = '<b>' . $condition . '</b>';

        $tmp = array();

        foreach ($result as $row) {
            $tmp[] = array('id', 'Product_name' => str_ireplace($condition,$replace_str,$row["Product_name"]));
        }

        foreach ($tmp as $key => $value) {
            $xml->addChild($key,$value);
        }

        echo $xml->asXML();

        // echo json_encode($data);
    }

?>