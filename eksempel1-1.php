<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$fornavn   = $_POST['fornavn']   ?? '';
$etternavn = $_POST['etternavn'] ?? '';
?>
<!DOCTYPE html>
<html lang="no">
<head><meta charset="UTF-8"><title>God dag</title></head>
<body>
  <?php if ($fornavn && $etternavn): ?>
    <p>God dag <?php echo htmlspecialchars($fornavn) . ' ' . htmlspecialchars($etternavn); ?></p>
  <?php else: ?>
    <p>Du må fylle ut både fornavn og etternavn.</p>
  <?php endif; ?>
  <p><a href="index.html">Tilbake til skjema</a></p>
</body>
</html>
