in elke pagina waar een database connectie nodig is:

include_once('functions.php');
$dsn = dbConnect();


in elke pagina:

include('../navbar.php');
include('../footer.php');
<link rel="stylesheet" href="../navbar.css">
<link rel="stylesheet" href="../footer.css">
