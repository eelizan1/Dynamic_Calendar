<html>

<link rel="stylesheet" type="text/css" href="calendar2.css">

<body>


    <?php 
// get current date and time 
// time is from server 

$date = date('m-d-y'); 

 //how many hours to show
$hours_to_show = 6; 
$time = time();
$header_time = date('H:i:s');    

// gets current time and returns it in a 12 hour stirng format    
function getTime($time){
    // date() returns a string with 'g' (12 hour format)
    $hour = date("g", $time); 
    return "$hour:00:00";
}    

?>
        <div class="container">
            <!--    displays current date and time-->
            <h1>Todays Date: <?php echo $date?></h1>
            <h1>Current Time: <?php echo $header_time?></h1>
            <h1>Hours to Show: <?php echo $hours_to_show?></h1>

            <br>
            <hr>
            <!--calendar table-->



            <table id="event_table">
                <tr>
                    <th class="hr_td">Hours </th>
                    <th class="table_header">John </th>
                    <th class="table_header">Jacob </th>
                    <th class="table_header">Jewel </th>
                </tr>
                <tr>
                    <br>

                </tr>

                <?php
            for ($i = 0; $i < $hours_to_show; $i++) {
            $hour = getTime($time + $i * 60 * 60);    
            if ($i % 2 == 0) {
                
                //even-row is in qoutes because it is inside the php
                echo "<tr class='even_row'> \n ";
                echo "<td class='hr_td'>
                            <b>$hour</b>
                      </td>
                      <td> </td>                      
                      <td> </td>
                      <td> </td> \n";
                echo "</tr> \n";

            }

            if ($i % 2 != 0) {

                echo "<tr class='odd_row'> \n";
                echo "<td class='hr_td'>
                            <b>$hour</b>
                      </td>
                      <td> </td>
                      <td> </td>
                      <td> </td> \n";

                echo "</tr> \n";
            }
                
                
        }
                ?>



            </table>

        </div>

</body>



</html>