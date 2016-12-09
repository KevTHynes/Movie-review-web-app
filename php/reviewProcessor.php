<?php
$errors = array();
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $movie = $_POST['movie'];
   $rating = $_POST['rating'];
   $text = $_POST['text'];
  
  if($name == ''){
		$errors[] = 'name is blank';
	}
	if($movie == 'none'){
		$errors[] = 'you did not choose a movie';
	}
	if($text == ''){
		$errors[] = 'you did not review the movie';
	}
  if($rating == 'unchecked'){
    $errors[] = 'You did not rate the movie';
  }
					if(count($errors) > 0){
						echo '<u>';
							foreach($errors as $e){
							echo '<li>' . $e . '</li>';
						}
					}
  if(count($errors) == 0){
// load previous XML from file
 $xml = simplexml_load_file("../data/reviews.xml") or die("ERROR: Cannot
load Reviews.xml.");

 // add a new feedback node
 $review = $xml->addChild('review');

 // add form data to XML
 $review->addChild('name', $name);
 $review->addChild('movie', $movie);
 $review->addChild('rating', $rating);
 $review->addChild('text', $text);
// save the whole modified XML
 $xml->asXml('../data/reviews.xml');
  // Display thank you
 header("Location: ../thankyou.html");
  }
} 
//else {
 // nothing happened -- go back to feedback form
 //header("Location: ../latest movie.html");
//}
?>