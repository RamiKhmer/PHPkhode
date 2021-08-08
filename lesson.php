<pre><?php 

$database = mysqli_connect("localhost","root","","test");

if(!$database){
    die("Databse Error");
}
else{
    // echo "Conneted to Database Successfully";
}


$doquery = "SELECT * FROM editors LIMIT 10";

$result = mysqli_query($database,$doquery);
// echo mysqli_error($database)." : ".mysqli_errno($database);



while($data = mysqli_fetch_assoc($result)){
    echo $data['id']." : ".$data['username']."\n";
}

?></pre>