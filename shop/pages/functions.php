<?
function found_items($database, $filters){
  $id = array();
  $types = explode(",", $filters["types"]);
  $query ="SELECT id, type FROM items";
  if($result = mysqli_query($database, $query)){
    $x = 0;
    while ($row = mysqli_fetch_row($result)) {
      if($row[1] == $types[0]){
        $id['types'][$x] = $row[0];
      }else{
        $id['types'][$x] = "";
      }
    $x += 1;
    }   
  }
  return var_dump($id);
}
function get_items($database, $id){
  for( $x = 0; $x < count($id); $x++ ){
    $query ="SELECT id, image, type, filter_2, filter_3, filter_4, filter_5, description FROM items WHERE id = '$id[$x]'";
    if($result = mysqli_query($database, $query)){
      $out = array();
      while ($row = mysqli_fetch_row($result)) {
        for( $n = 0; $n < count($row); $n++ ){
          $out[$n] = $row[$n];
        }
      }
    }
  }
  return var_dump($out);
}
?>
