<?php
if (isset($_POST['submit'])) {
// form data processing goes here
} else {
 // nothing happened -- go back to feedback form
 header("Location: index.php");

}

if (isset($_POST['submit'])) {
$movie = $_POST['movie'];
 $text = $_POST['text'];
 $rating = $_POST['rating'];
} else {
 // nothing happened -- go back to feedback form
 header("Location: index.php");
}

if (isset($_POST['submit'])) {
$movie = $_POST['movie'];
 $text = $_POST['text'];
 $rating = $_POST['rating'];
// load previous XML from file
 $xml = simplexml_load_file("../data/reviews.xml") or die("ERROR: Cannot
load reviews.xml.");

 // add a new feedback node
 $reviews = $xml->addChild('review');

 // add form data to XML
 $reviews->addChild('movie', $movie);
 $reviews->addChild('text', $text);
 $reviews->addChild('rating', $rating);
// save the whole modified XML
 $xml->asXml('../data/reviews.xml');
} else {
 // nothing happened -- go back to feedback form
 header("Location: index.php");
}

if (isset($_POST['submit'])) {
// save the whole modified XML
 $xml->asXml('../data/reviews.xml');
// Display thank you
 header("Location: ../thankyou.html");
} else {
 // nothing happened -- go back to feedback form
 header("Location: index.php");
}
•
?>