<?php
session_start();
// 1. Server checks that client have PHPSESSID cookie or not
// 2. If not, Server:
// 2.1. Creates random string (key or token)
// 2.2. Sends cookie to client with name = PHPSESID and val=key
// 2.3. Creates some container that will keep data
//  N.B. key is only way to get container content
// 3. If client already have PHPSESSID cookie:
// 3.1 IF this key (PHPSESSID value) still correspons to container, 
//     extract container's
//     content into $_SESSION variable
// 3.2 IF container already deleted, go to 2.1
//$_SESSION["some_secret_data"] = 1231223123;
print_r($_SESSION);

$page = $_GET["page"] ?? 0;
if ($page < 0) $page=0;
$page_size = 2000;

$start_pos = $page * $page_size;


$book_content = file_get_contents("book.txt");
$a = "abcdefghijkghijkabcdefghij";

$fixed_end_position_back = strrpos(substr($book_content, 0, $start_pos + $page_size), "\n");

$fixed_end_position = strpos($book_content, "\n", $start_pos + $page_size);

$chars_back = $start_pos + $page_size - $fixed_end_position_back;
$chars_fwd = $fixed_end_position - $start_pos - $page_size;

$fixed_start_position = strpos($book_content, "\n", $start_pos);
if ($page == 0) $fixed_start_position = 0;

print "positions: $fixed_start_position - $fixed_end_position_back ($chars_back) $fixed_end_position ($chars_fwd)";
$page_content = substr($book_content, $fixed_start_position, $fixed_end_position - $fixed_start_position);

$page_content = "<div>".
  str_replace("\n","</div>\n<div>", $page_content)
  ."</div>";

?>
<style>
  .mark { background-color: #f55; }
</style>
<?php
$search = "was";

$offset = 0;
while ($pos = stripos($page_content, $search, $offset)) {

$page_content = substr($page_content, 0, $pos).
   '<span class="mark">'.
   substr($page_content, $pos, strlen($search)).
   '</span>'.
   substr($page_content, $pos + strlen($search));
   $offset = $pos + 26 + strlen($search);
}

print $page_content;

?>

<a href="?page=<?=$page-1?>">Prev page</a>
<a href="?page=<?=$page+1?>">Next page</a>