<?php
$inc = include("con_db.php");
if ($inc) {
    $consulta = "SELECT * FROM vw_film_list ORDER BY $film_id DESC LIMIT 10";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()){
            $film_id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $release_year = $row['release_year'];
            $language_id = $row['language_id'];
            $rental_duration = $row['rental_duration'];
            $rental_rate = $row['rental_rate'];
            $length = $row['length'];
            $replacement_cost = $row['replacement_cost'];
            $rating = $row['rating'];
            $special_features = $row['special_features'];
            $category = $row['category'];
            $actor_count = $row['actor_count'];
            ?>
            <div>
                <h2><?php echo $title; ?></h2>
                <div>
                    <p>
                        <b>ID: </b><?php echo $film_id; ?><br>
                        <b>Description: </b><?php echo $description; ?><br>
                        <b>Release Year: </b><?php echo $release_year; ?><br>
                        <b>Language: </b><?php echo $language_id; ?><br>
                        <b>Rental Duration: </b><?php echo $rental_duration; ?><br>
                        <b>Rental Rate: </b><?php echo $rental_rate; ?><br>
                        <b>Length: </b><?php echo $length; ?><br>
                        <b>Replacement Cost: </b><?php echo $replacement_cost; ?><br>
                        <b>Rating: </b><?php echo $rating; ?><br>
                        <b>Special Features: </b><?php echo $special_features; ?><br>
                        <b>Category: </b><?php echo $category; ?><br>
                        <b>Actor Count: </b><?php echo $actor_count; ?><br>
                </div>
            </div>
<?php
        }
    }
}
?>