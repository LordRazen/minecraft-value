# Minecraft Value
A PHP Library about the Minecraft Custom Heads Value

<br>

## UUID Formats
Regular UUIDs (Hyphenated Hexadecimal):

```ea3bc3ec-7051-4efc-87f9-68635c9b473a```

Trimmed UUIDs (Hexadecimal):

`ea3bc3ec70514efc87f968635c9b473a`

UUIDs as Integer Arrays (Int-Array):

`[I;-365181972,1884376828,-2013697949,1553680186]`

<br>

## How to use
Create a new Value object:

`$value = new Value("72d03c876b9ea20ca1eb30ea631d9013b5c347d44e66ce77bd695259235e188a");`

You can pass the following to the Constructor:
- Skinfile URL:
```
72d03c876b9ea20ca1eb30ea631d9013b5c347d44e66ce77bd695259235e188a
```
- Full Skinfile URL:
```
http://textures.minecraft.net/texture/72d03c876b9ea20ca1eb30ea631d9013b5c347d44e66ce77bd695259235e188a
```
- Value (uncleaned):
```
ewogICJ0aW1lc3RhbXAiIDogMTYwNTI5Mzk3NTc3MywKICAicHJvZmlsZUlkIiA6ICI2NGM0OTk4NTY1ZGE0NDE3YjllNTBiNTA3ZmI3NGM3ZSIsCiAgInByb2ZpbGVOYW1lIiA6ICJ4WF9ENEFSS19LMU5HX1h4IiwKICAidGV4dHVyZXMiIDogewogICAgIlNLSU4iIDogewogICAgICAidXJsIiA6ICJodHRwOi8vdGV4dHVyZXMubWluZWNyYWZ0Lm5ldC90ZXh0dXJlLzI4NzZhNDlmOGE1NDIyZTUyNWI3NzgxYzkyY2ZkZDZjYzYwNmNkNTcxYWExNWRlODljZDJmZjUyNjczNWQwNTMiLAogICAgICAibWV0YWRhdGEiIDogewogICAgICAgICJtb2RlbCIgOiAic2xpbSIKICAgICAgfQogICAgfQogIH0KfQ
```
- Value (cleaned):
```
eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvMjg3NmE0OWY4YTU0MjJlNTI1Yjc3ODFjOTJjZmRkNmNjNjA2Y2Q1NzFhYTE1ZGU4OWNkMmZmNTI2NzM1ZDA1MyJ9fX0=
```

The Value object automatically detects which input is given and calculate skinfileUrl, full skinfileUrl and value. 

The value is refreshed! This means, if you pass an uncleaned one, you get a cleaned one in return. 

If the url has not 64 characters or the value cannot be decoded or the url in there does not exist, a InvalidValueException is thrown.

The different valued can be called with the following methods:
```
$value->getUrl();
$value->getUrlFull();
$value->getValue();
```

<br>
<hr>
www.minecraft-heads.com

![Minecraft Heads Banner](https://minecraft-heads.com/images/banners/minecraft-heads_halfbanner_234x60.png)