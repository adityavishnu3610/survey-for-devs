<?php


include('includes/dbconnect.php');

if (!empty($_POST['fetchChartData'])){

    $chart_qry1 = "SELECT interest FROM `languages`";
    $chart_qry2 = "SELECT knowledge FROM `languages`";

    $run_chart_qry1 = mysqli_query($conn, $chart_qry1);
    $run_chart_qry2 = mysqli_query($conn, $chart_qry2);

    $intrest = "[";
    while($row = mysqli_fetch_array($run_chart_qry1))
    {
       $intrest .= $row [0].', ';
    }
    $intrest .= "]";


    $knowledge = "[";
    while($row = mysqli_fetch_array($run_chart_qry2))
    {
        $knowledge .= $row [0].', ';
    }
    $knowledge .= "]";
    
    

    echo '
	
    function replace() {
        var intrest = "'.$intrest.'";
        var knowledge = "'.$knowledge.'";
        
    }
';
}
else{
    echo 'invalid request';
}
?>