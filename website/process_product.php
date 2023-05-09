<?php

use Website\DataSource;

if (isset($_POST["query"])) {
    require_once __DIR__ . '\db_connect.php';

    $data = <<<XML
        <?xml version='1.0' encoding='UTF-8'?>
        <list>
        </list>
        XML;

    $xml = new SimpleXMLElement($data);

    $limit = 8;

    $page = 1;

    if ($_POST["page"] > 1) {

        $start = (($_POST["page"] - 1) * $limit);

        $page = $_POST["page"];
    } else {
        $start = 0;
    }

    if ($_POST["query"] != '') {

        $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

        $condition = trim($condition);

        $condition = str_replace(' ', '%', $condition);

        $sql = "SELECT * FROM PRODUCT WHERE Product_name LIKE '%' . $condition . '%' ORDER BY id DESC LIMIT $start, $limit";

        $result = $conn->query($sql);

        foreach ($result as $row) {
            $add = $xml->addChild('Product', $row['Product_name']);
            $add->addAttribute('id', $row['id']);
            $add->addChild('Price', $row['Price']);
        }

        $nRows = mysqli_num_rows($result);

        //     $sql = "SELECT count(*) FROM PRODUCT WHERE Product_name LIKE '%' . $condition . '%' ORDER BY id DESC";

        //     $result = $conn->query($sql);
    } else {
        $sql = "SELECT * FROM PRODUCT ORDER BY id DESC LIMIT $start, $limit";

        $result = $conn->query($sql);

        foreach ($result as $row) {
            $add = $xml->addChild('Product', $row['Product_name']);
            $add->addAttribute('id', $row['id']);
            $add->addChild('Price', $row['Price']);
        }

        $nRows = mysqli_num_rows($result);

        //     $sql = "SELECT count(*) FROM PRODUCT WHERE Product_name LIKE '%' . $condition . '%' ORDER BY id DESC";

        //     $result = $conn->query($sql);
    }

    // $pagination_html = "<div class='align-items-center'><ul class='pagination'>";

    // $total_links = ceil($nRows / $limit);

    // $previous_link = '';

    // $next_link = '';

    // $page_link = '';

    // if ($total_links > 3) {
    //     if ($page < 4) {
    //         for ($i = 1; $i <= $total_links; $i++) {
    //             $page_arr[] = $i;
    //         }
    //         $page_arr[] = '...';
    //         $page_arr[] = $total_links;
    //     } else {
    //         $end_limit = $total_links - 4;

    //         $page_arr[] = 1;

    //         $page_arr[] = '...';

    //         if ($page > $end_limit) {
    //             for ($i = $end_limit; $i <= $total_links; $i++) {
    //                 $page_arr[] = $i;
    //             }
    //         } else {
    //             for ($i = $page - 1; $i <= $page + 1; $i++) {
    //                 $page_arr[] = $i;
    //             }

    //             $page_arr[] = '...';

    //             $page_arr[] = $total_links;
    //         }
    //     }
    // } else {
    //     for ($i = 1; $i <= $total_links; $i++) {
    //         $page_arr[] = $i;
    //     }
    // }

    // for ($i = 0; $i <= count($page_arr); $i++) {
    //     if ($page == $page_arr[$i]) {

    //         $page_link .= "
    //             <li  class='page-item active'>
    //                 <a class='page-link' href='#'>" . $page_arr[$i] . "<span class='sr-only'>(current)</span></a>
    //             </li>";

    //         $previous_id = $page_arr[$i] - 1;

    //         if ($previous_id > 0) {
    //             $previous_link = "
    //                 <li class='page-item'>
    //                     <a class='page-link' href='handlePagination(" . $_POST["query"] . "," . $previous_id . "'>Previous</a>
    //                 </li>";
    //         } else {
    //             $previous_link = "
    //                 <li class='page-item disabled'>
    //                     <a class='page-link' href='#'>Previous</a>
    //                 </li>";
    //         }

    //         $next_id = $page_arr[$i] + 1;

    //         if ($next_id >= $total_links) {
    //             $next_link = "
    //                 <li class='page-item disabled'>
    //                     <a class='page-link' href='#'>Next</a>
    //                 </li>";
    //         } else {
    //             $next_link = "
    //                 <li class='page-item'>
    //                     <a class='page-link' href='handlePagination(" . $_POST["query"] . "," . $next_id . "'>Next</a>
    //                 </li>";
    //         }
    //     } else {
    //         if ($page_arr[$i] == '...') {
    //             $page_link .= "
    //                 <li class='page-item disabled'>
    //                     <a class='page-link' href='#'>...</a>
    //                 </li>";
    //         } else {
    //             $page_link .= "
    //                 <li class='page-item'>
    //                     <a class='page-link' href='handlePagination(" . $_POST["query"] . "," . $page_arr[$i] . "'>" . $page_arr[$i] . "</a>
    //                 </li>";
    //         }
    //     }
    // }

    // $pagination_html .= $previous_link . $page_link . $next_link;

    // $pagination_html .= "</ul></div>";

    // $xml->addChild('Pagination', $pagination_html);

    echo $xml->asXML();
}
