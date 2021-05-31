<?php
$name = getenv('NAME', true) ?: 'Kubernetes';
echo sprintf('Hello %s!', $name);
?>
