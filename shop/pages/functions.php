<?
function get_items($database, $filters){
  $types = explode(",", $filters->types);
  for( $x = 0; $x < count($types); $x++ ){
    $query ="SELECT id FROM items WHERE type = $types[$x]";
    if($result = mysqli_query($database, $query)){
      $id = array();
      while ($row = mysqli_fetch_row($result)) {
        for( $n = 0; $n < count($row); $n++ ){
          return $id[$n] = $row[$n];
        }
      }
    }
  }
}
?>
