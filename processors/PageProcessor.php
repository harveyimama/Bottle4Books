<?php



if (isset($_GET['age']))
    $_SESSION['age'] = $_GET['age'];
if (isset($_GET['cat']))
    $_SESSION['cat'] = $_GET['cat'];
if (isset($_GET['amt']))
    $_SESSION['amt'] = $_GET['amt'];
if (isset($_GET['page']))
    $_SESSION['pageNo'] = $_GET['page'];



function getPageRange($pageno, $items)
{
    if ($pageno == null)
        $pageno = 1;

    $start = 1 + (($pageno - 1) * 10);

    if ($items > $start + 9)
        $end = $start + 9;
    else
        $end = ($items + 1) - $start;

    return $start . '-' . $end;
}

// session_destroy();

?>
