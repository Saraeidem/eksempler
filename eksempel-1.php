<?php
// Viser feil i nettleseren (nyttig for debugging)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Hent verdier fra skjemaet (POST)
$fornavn   = htmlspecialchars($_POST['fornavn'] ?? '');
$etternavn = htmlspecialchars($_POST['etternavn'] ?? '');
?>
<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>God dag</title>
</head>
<body>
  <?php if ($fornavn && $etternavn): ?>
    <p>God dag <?php echo $fornavn . ' ' . $etternavn; ?></p>
  <?php else: ?>
    <p>Du må fylle ut både fornavn og etternavn.</p>
  <?php endif; ?>

  <p><a href="html.eksempel1">Tilbake til skjema</a></p>
</body>
</html>
