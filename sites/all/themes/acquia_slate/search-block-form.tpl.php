

<div class="form-search">
<!--<table><tr><td>-->
<?php //    * Remove "Search this site: "  *    ////
  $search["search_block_form"]= str_replace("Search this site: ", "", $search["search_block_form"]);

  //    * "Search" button with "Go!" *      ////
  //$search["submit"]=str_replace('value="Search"', 'value="GO"', $search["submit"]);

  print $search["search_block_form"];
  print $search["submit"];
  print $search["hidden"];
?>
<!--</td></tr></table>-->
</div>



