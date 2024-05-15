<title>Value</title>
<?php

require_once(dirname(__FILE__) . '/../vendor/autoload.php');

use Minecraft\Value;

echo 'Value on SkinfileUrl:';
$value = new Value('72d03c876b9ea20ca1eb30ea631d9013b5c347d44e66ce77bd695259235e188a');
var_dump($value);

echo '<hr>';

echo 'Value on Full SkinfileUrl:';
$value2 = new Value('http://textures.minecraft.net/texture/72d03c876b9ea20ca1eb30ea631d9013b5c347d44e66ce77bd695259235e188a');
var_dump($value2);

echo '<hr>';

echo 'Cleaned Value on Value:';
$value3 = new Value('ewogICJ0aW1lc3RhbXAiIDogMTYwNTI5Mzk3NTc3MywKICAicHJvZmlsZUlkIiA6ICI2NGM0OTk4NTY1ZGE0NDE3YjllNTBiNTA3ZmI3NGM3ZSIsCiAgInByb2ZpbGVOYW1lIiA6ICJ4WF9ENEFSS19LMU5HX1h4IiwKICAidGV4dHVyZXMiIDogewogICAgIlNLSU4iIDogewogICAgICAidXJsIiA6ICJodHRwOi8vdGV4dHVyZXMubWluZWNyYWZ0Lm5ldC90ZXh0dXJlLzI4NzZhNDlmOGE1NDIyZTUyNWI3NzgxYzkyY2ZkZDZjYzYwNmNkNTcxYWExNWRlODljZDJmZjUyNjczNWQwNTMiLAogICAgICAibWV0YWRhdGEiIDogewogICAgICAgICJtb2RlbCIgOiAic2xpbSIKICAgICAgfQogICAgfQogIH0KfQ');
var_dump($value3);

echo '<hr>';

echo 'Cleaned Value on NameMC Value:';
$value4 = new Value('e3RleHR1cmVzOntTS0lOOnt1cmw6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvMzAzMjIyMGU3ZjMwY2Y4M2U0ZDVhYmU1Nzk1MjBhNzk1YWIwZTk3NmQ2ZTZkMTc0YTE4MmNlMjVlNWY1YTA3OSJ9fX0=');
var_dump($value4);

echo '<hr>';

echo 'XSS Value:';
$value4 = new Value('eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvZDc1OWMyMzhmZjNjZTc5NmRkMTQwMDZjMmFmNDEwN2FiZWE2NTg1NjlhNjBjMWVmNWE1MzliOWRiNWY1MjU5NCNcIj48aW1nL3NyYy9vbmVycm9yPWFsZXJ0KDIpPiJ9fX0=');
var_dump($value4);

echo '<hr>';

echo 'From Mojang API:';
$value4 = new Value('ewogICJ0aW1lc3RhbXAiIDogMTcwMTk0MDYzNjU0MCwKICAicHJvZmlsZUlkIiA6ICI4ZDBhNDExNzVhNzY0YjcyYTdkYzY3YjU1NTExOWZlZiIsCiAgInByb2ZpbGVOYW1lIiA6ICJMb3JkUmF6ZW4iLAogICJ0ZXh0dXJlcyIgOiB7CiAgICAiU0tJTiIgOiB7CiAgICAgICJ1cmwiIDogImh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvMjdlMGM0YTYxNDQ0MzI0NGVmZThhNTk4ZWZkMTc1OTIzYWQ2NTMzOTg1NmY0NmMzMWE4NmJlNGI4MTVhMDQxIgogICAgfQogIH0KfQ');
var_dump($value4);

echo '<hr>';

echo 'New Mineskin Value';
$value5 = new Value('ewogICJ0aW1lc3RhbXAiIDogMTcxNTY5NjM3MjgyMCwKICAicHJvZmlsZUlkIiA6ICJmNmYxY2IxMmYzNDU0MDRlYjZlNjU2NGE2ZDlmMjU2NyIsCiAgInByb2ZpbGVOYW1lIiA6ICJBdXJlbGl1c0dlbWluaSIsCiAgInNpZ25hdHVyZVJlcXVpcmVkIiA6IHRydWUsCiAgInRleHR1cmVzIiA6IHsKICAgICJTS0lOIiA6IHsKICAgICAgInVybCIgOiAiaHR0cDovL3RleHR1cmVzLm1pbmVjcmFmdC5uZXQvdGV4dHVyZS81MGI0NDU5YmJmZDcyMWFjYWY0MjRkYjhlODgwZDUyODVkYmQ5MzAxZmJlZjg1YzMwMmY3ZDM5ZDI4M2FkN2Y2IiwKICAgICAgIm1ldGFkYXRhIiA6IHsKICAgICAgICAibW9kZWwiIDogInNsaW0iCiAgICAgIH0KICAgIH0KICB9Cn0=');
var_dump($value5);
