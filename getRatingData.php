<?php
require_once "db.php";
require_once "functions.php";
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id
$userId = 1;

$query = "SELECT * FROM kfg_star_rating ORDER BY id DESC";
$result = mysqli_query($conn, $query);

$outputString = '';

foreach ($result as $row) {
    $userRating = userRating($userId, $row['id'], $conn);
    $totalRating = totalRating($row['id'], $conn);
    $outputString .= '
        <div class="row-item">
 <div class="row-title">' . $row['soalan'] . '</div> <div class="response" id="response-' . $row['id'] . '"></div>
 <ul class="list-inline"  onMouseLeave="mouseOutRating(' . $row['id'] . ',' . $userRating . ');"> ';
    
    for ($count = 1; $count <= 5; $count ++) {
        $starRatingId = $row['id'] . '_' . $count;
        
        if ($count <= $userRating) {
            
            $outputString .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected">&#9733;</li>';
        } else {
            $outputString .= '<li value="' . $count . '"  id="' . $starRatingId . '" class="star" onclick="addRating(' . $row['id'] . ',' . $count . ');" onMouseOver="mouseOverRating(' . $row['id'] . ',' . $count . ');">&#9733;</li>';
        }
    } // endFor
    
    $outputString .= '
 </ul>
 
 <p class="review-note">Total Reviews: ' . $totalRating . '</p>
 <p class="text-address">' . $row["no_pendaftaran"] . '</p>
</div>
 ';
}
echo $outputString;
?>