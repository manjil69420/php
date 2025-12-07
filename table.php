<?php
$students=[
    [
        "name"=>"Ram",
        "address"=>"BRT",
        "phone"=>98029,
        "email"=>"ram@gmail.com"
    ],
    [
         "name"=>"shyam",
        "address"=>"Dharan",
        "phone"=>98020,
        "email"=>"shyam@gmail.com"
    ],
    [
        "name"=>"Dharan",
        "address"=>"Itahari",
        "phone"=>98089,
        "email"=>"Hari@gmail.com" 

    ],
    
];
?>
<center>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <?php foreach($students as $student){
        echo "<tr>";
        echo "<td>".$student['name']."</td>";
        echo "<td>".$student['address']."</td>";
        echo "<td>".$student['phone']."</td>";
        echo "<td>".$student['email']."</td>";
        echo "</tr>";
    }
    ?>
</table>
</center>