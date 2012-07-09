<?php
$expected = <<<'EOT'
<h1>Пользователи</h1>
<p>Username1</p><p>Username2</p><p>Username3</p><p>Username4</p>
EOT;

ob_start();
include 'index.php';
$actual = ob_get_clean();

echo $actual === $expected ? 'OK' : 'Failed', PHP_EOL;