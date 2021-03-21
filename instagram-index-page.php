<?php

include 'api_class.php';

?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="js/widget.js"></script>
<?php


$InstagramApi = new InstagramApi();


// Instagram api

$result = $InstagramApi->instagram_api_request();

$ImagesLengthArray =  count($result->data);

// Split the array into two arrays
$firstImages = array_slice($result->data, 0, 6, true);

$secondImages = array_slice($result->data, 6, $ImagesLengthArray, true);


echo '<div class="row image-container">';

echo '<h4 class="header_line"><span class="header_Text">#ShoesWeLove</span></h4>';

echo '<div class="picture-container col-8">';

echo '<img src="img/left-arrow.png" class="prev" alt="Prev">';

// Looping out 1st row of images
foreach ($firstImages as $post) {

    echo '<div class="col-xs-2 instagram_picture active">';

    echo '<a class="instagram_link" href="' . $post->permalink . '"target="_blank"><img class="instagram_picture " src="' . $post->media_url. '"></a>';
    echo '<div class="active2 text_description">'.$post->caption.'';
    echo '</div>';
    echo '</div>';

}

// Looping out 2nd row of images
foreach ($secondImages as $post) {

    echo '<div class="col-xs-2 instagram_picture notActive">';

    echo '<a class="instagram_link" href="' . $post->permalink . '"target="_blank"><img class="instagram_picture " src="' . $post->media_url. '"></a>';
    echo '<div class="notActive2 text_descriptionSecondRow">'.$post->caption.'</div>';
    echo '</div>';
}

echo '<img src="img/right-arrow.png" class="next" alt="Next">';
echo '</div>';

echo '</div>';

echo '<div class="mobile_button_continer ">';
echo '<img src="img/left-arrow.png" class="prev_Mobile " alt="Prev">';
echo '<img src="img/right-arrow.png" class="next_Mobile " alt="Next">';
echo '</div>';

?>

<?php


// long lived token IGQVJYMGhCRTBWVkJTOTdGMjl2emw1UDRLREtrY2JHRDVtWTBQU1dGTFYtejgyZAHVjMUVINThVUGpxTk42SlpCb3dmYkVmemduZAUFaQnY1QVVzdUIteTNXRDRDUi1MVXpZAZA2pUSEpoTXY4ZATc5ZATJWUwZDZD