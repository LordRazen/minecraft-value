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
