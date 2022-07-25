foreach ($posts as $query){
  if (in_array('enterprise', $query['categories'])) {
    echo '<li>' . $query['title'] . '</li>';
  }
} 
