<?php
/**
 * Provide an AJAX response for Best Bets autocomplete. Best Bets are parsed from the file bets.txt
 * and a (very inefficient) search is performed to try to match the submitted term with one of the
 * Best Bets keywords. Since there should only be an exact match, we break as soon as we find one.
 * Since the Best Bets is so limited in scope (~100 items ... for now!), we can get away with this
 * approach — but it won't scale very far!
 */
$term = trim($_GET['term']);

$bets = file('bets.txt', FILE_IGNORE_NEW_LINES);
$response = array();
foreach ($bets as $bet) {
  $parts = split('\|', $bet);
  if (strtoupper($parts[0]) == strtoupper($term)) { 
  	$result = array('id' => $parts[2], 'value' =>$parts[1], 'label' => $parts[1]);
  	$response[] = $result;
  	break;

  }
}
echo json_encode($response);

?>