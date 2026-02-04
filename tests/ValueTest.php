<?php

/**
 * Test for Value Class
 *
 * @package			MinecraftLibrary
 * @author			LordRazen <http://www.minecraft-heads.com>	
 * @copyright		Copyright (C) 2024. All Rights Reserved
 */

use Minecraft\Exception\InvalidValueException;
use Minecraft\Value;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ValueTest extends TestCase
{
    /**
     * Test if the value is calculated correctly from Url
     */
    #[Test]
    #[DataProvider('dataValue')]
    public function testCleanValueObjectFromUrl(array $data)
    {
        $value = new Value($data['url']);

        $this->assertSame($data['urlFull'], $value->getUrlFull());
        $this->assertSame($data['url'], $value->getUrl());
        $this->assertSame($data['valueCleaned'], $value->getValue());
    }

    /**
     * Test if the value is calculated correctly from FullUrl
     */
    #[Test]
    #[DataProvider('dataValue')]
    public function testCleanValueObjectFromFullUrl(array $data)
    {
        $value = new Value($data['urlFull']);

        $this->assertSame($data['urlFull'], $value->getUrlFull());
        $this->assertSame($data['url'], $value->getUrl());
        $this->assertSame($data['valueCleaned'], $value->getValue());
    }

    /**
     * Test if the value is calculated correctly from Url
     */
    #[Test]
    #[DataProvider('dataValue')]
    public function testCleanValueObjectFromValue(array $data)
    {
        $value = new Value($data['value']);

        $this->assertSame($data['urlFull'], $value->getUrlFull());
        $this->assertSame($data['url'], $value->getUrl());
        $this->assertSame($data['valueCleaned'], $value->getValue());
    }

    public static function dataValue()
    {
        return [
            [
                [
                    'value' => 'ewogICJ0aW1lc3RhbXAiIDogMTYwNTI5Mzk3NTc3MywKICAicHJvZmlsZUlkIiA6ICI2NGM0OTk4NTY1ZGE0NDE3YjllNTBiNTA3ZmI3NGM3ZSIsCiAgInByb2ZpbGVOYW1lIiA6ICJ4WF9ENEFSS19LMU5HX1h4IiwKICAidGV4dHVyZXMiIDogewogICAgIlNLSU4iIDogewogICAgICAidXJsIiA6ICJodHRwOi8vdGV4dHVyZXMubWluZWNyYWZ0Lm5ldC90ZXh0dXJlLzI4NzZhNDlmOGE1NDIyZTUyNWI3NzgxYzkyY2ZkZDZjYzYwNmNkNTcxYWExNWRlODljZDJmZjUyNjczNWQwNTMiLAogICAgICAibWV0YWRhdGEiIDogewogICAgICAgICJtb2RlbCIgOiAic2xpbSIKICAgICAgfQogICAgfQogIH0KfQ',
                    'valueCleaned' => 'eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvMjg3NmE0OWY4YTU0MjJlNTI1Yjc3ODFjOTJjZmRkNmNjNjA2Y2Q1NzFhYTE1ZGU4OWNkMmZmNTI2NzM1ZDA1MyJ9fX0=',
                    'urlFull' => 'http://textures.minecraft.net/texture/2876a49f8a5422e525b7781c92cfdd6cc606cd571aa15de89cd2ff526735d053',
                    'url' => '2876a49f8a5422e525b7781c92cfdd6cc606cd571aa15de89cd2ff526735d053'
                ]
            ],
            [
                [
                    'value' => 'e3RleHR1cmVzOntTS0lOOnt1cmw6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvYzM4NTRjODI0M2Y3ZDA3MzdmOGNhMGYzOWU3ZmFiMDg4ZTE1NGMyNjdkYjIyMmZiZDZmZTZjZTdjOTA4NzdkMSJ9fX0=',
                    'valueCleaned' => 'eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvYzM4NTRjODI0M2Y3ZDA3MzdmOGNhMGYzOWU3ZmFiMDg4ZTE1NGMyNjdkYjIyMmZiZDZmZTZjZTdjOTA4NzdkMSJ9fX0=',
                    'urlFull' => 'http://textures.minecraft.net/texture/c3854c8243f7d0737f8ca0f39e7fab088e154c267db222fbd6fe6ce7c90877d1',
                    'url' => 'c3854c8243f7d0737f8ca0f39e7fab088e154c267db222fbd6fe6ce7c90877d1'
                ]
            ],
            [
                [
                    'value' => 'e3RleHR1cmVzOntTS0lOOnt1cmw6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvMzAzMjIyMGU3ZjMwY2Y4M2U0ZDVhYmU1Nzk1MjBhNzk1YWIwZTk3NmQ2ZTZkMTc0YTE4MmNlMjVlNWY1YTA3OSJ9fX0=',
                    'valueCleaned' => 'eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvMzAzMjIyMGU3ZjMwY2Y4M2U0ZDVhYmU1Nzk1MjBhNzk1YWIwZTk3NmQ2ZTZkMTc0YTE4MmNlMjVlNWY1YTA3OSJ9fX0=',
                    'urlFull' => 'http://textures.minecraft.net/texture/3032220e7f30cf83e4d5abe579520a795ab0e976d6e6d174a182ce25e5f5a079',
                    'url' => '3032220e7f30cf83e4d5abe579520a795ab0e976d6e6d174a182ce25e5f5a079'
                ]
            ],
            # Potential XSS (html within the encoded url)
            [
                [
                    'value' => 'eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvZDc1OWMyMzhmZjNjZTc5NmRkMTQwMDZjMmFmNDEwN2FiZWE2NTg1NjlhNjBjMWVmNWE1MzliOWRiNWY1MjU5NCNcIj48aW1nL3NyYy9vbmVycm9yPWFsZXJ0KDIpPiJ9fX0=',
                    'valueCleaned' => 'eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvZDc1OWMyMzhmZjNjZTc5NmRkMTQwMDZjMmFmNDEwN2FiZWE2NTg1NjlhNjBjMWVmNWE1MzliOWRiNWY1MjU5NCJ9fX0=',
                    'urlFull' => 'http://textures.minecraft.net/texture/d759c238ff3ce796dd14006c2af4107abea658569a60c1ef5a539b9db5f52594',
                    'url' => 'd759c238ff3ce796dd14006c2af4107abea658569a60c1ef5a539b9db5f52594'
                ]
            ],
            # New Mineskin Value
            [
                [
                    'value' => 'ewogICJ0aW1lc3RhbXAiIDogMTcxNTY5NjM3MjgyMCwKICAicHJvZmlsZUlkIiA6ICJmNmYxY2IxMmYzNDU0MDRlYjZlNjU2NGE2ZDlmMjU2NyIsCiAgInByb2ZpbGVOYW1lIiA6ICJBdXJlbGl1c0dlbWluaSIsCiAgInNpZ25hdHVyZVJlcXVpcmVkIiA6IHRydWUsCiAgInRleHR1cmVzIiA6IHsKICAgICJTS0lOIiA6IHsKICAgICAgInVybCIgOiAiaHR0cDovL3RleHR1cmVzLm1pbmVjcmFmdC5uZXQvdGV4dHVyZS81MGI0NDU5YmJmZDcyMWFjYWY0MjRkYjhlODgwZDUyODVkYmQ5MzAxZmJlZjg1YzMwMmY3ZDM5ZDI4M2FkN2Y2IiwKICAgICAgIm1ldGFkYXRhIiA6IHsKICAgICAgICAibW9kZWwiIDogInNsaW0iCiAgICAgIH0KICAgIH0KICB9Cn0=',
                    'valueCleaned' => 'eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvNTBiNDQ1OWJiZmQ3MjFhY2FmNDI0ZGI4ZTg4MGQ1Mjg1ZGJkOTMwMWZiZWY4NWMzMDJmN2QzOWQyODNhZDdmNiJ9fX0=',
                    'urlFull' => 'http://textures.minecraft.net/texture/50b4459bbfd721acaf424db8e880d5285dbd9301fbef85c302f7d39d283ad7f6',
                    'url' => '50b4459bbfd721acaf424db8e880d5285dbd9301fbef85c302f7d39d283ad7f6'
                ]
            ]
        ];
    }

    /**
     * Test Invalid Value: Empty, encoded stdClass object
     */
    #[Test]
    public function testInvalidValueExceptionOnEmptyValue()
    {
        # Empty encoded stdClass object
        $this->expectException(InvalidValueException::class);
        new Value('e30=');
    }

    /**
     * Test Invalid Value: Random Value
     */
    #[Test]
    public function testInvalidValueExceptionOnRandomValue()
    {
        # Just a random thing
        $this->expectException(InvalidValueException::class);
        new Value('notAValue');
    }
}
