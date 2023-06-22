<?php

/**
 * Test for Value Class
 *
 * @package			MinecraftLibrary
 * @author			LordRazen <http://www.minecraft-heads.com>	
 * @copyright		Copyright (C) 2020. All Rights Reserved
 */

use Minecraft\Exception\InvalidValueException;
use Minecraft\Value;
use PHPUnit\Framework\TestCase;

class ValueTest extends TestCase
{
    /**
     * Test if the value is calculated correctly from Url
     *
     * @test
     * @dataProvider dataValue
     */
    public function testCleanValueObjectFromUrl(array $data)
    {
        $value = new Value($data['url']);

        $this->assertSame($data['urlFull'], $value->getUrlFull());
        $this->assertSame($data['url'], $value->getUrl());
        $this->assertSame($data['valueCleaned'], $value->getValue());
    }

    /**
     * Test if the value is calculated correctly from FullUrl
     *
     * @test
     * @dataProvider dataValue
     */
    public function testCleanValueObjectFromFullUrl(array $data)
    {
        $value = new Value($data['urlFull']);

        $this->assertSame($data['urlFull'], $value->getUrlFull());
        $this->assertSame($data['url'], $value->getUrl());
        $this->assertSame($data['valueCleaned'], $value->getValue());
    }

    /**
     * Test if the value is calculated correctly from Url
     *
     * @test
     * @dataProvider dataValue
     */
    public function testCleanValueObjectFromValue(array $data)
    {
        $value = new Value($data['value']);

        $this->assertSame($data['urlFull'], $value->getUrlFull());
        $this->assertSame($data['url'], $value->getUrl());
        $this->assertSame($data['valueCleaned'], $value->getValue());
    }

    public function dataValue()
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
            ]
        ];
    }

    /**
     * Test Invalid Value: Empty, encoded stdClass object
     *
     * @test
     */
    public function testInvalidValueExceptionOnEmptyValue()
    {
        # Empty encoded stdClass object
        $this->expectException(InvalidValueException::class);
        new Value('e30=');
    }

    /**
     * Test Invalid Value: Random Value
     *
     * @test
     */
    public function testInvalidValueExceptionOnRandomValue()
    {
        # Just a random thing
        $this->expectException(InvalidValueException::class);
        new Value('notAValue');
    }
}
