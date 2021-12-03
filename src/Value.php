<?php

/**
 * Custom Head Value
 * 
 * @package			MinecraftLibrary
 * @author			LordRazen <http://www.minecraft-heads.com>	
 * @copyright		Copyright (C) 2020. All Rights Reserved
 */

namespace Minecraft;

use Minecraft\Exception\InvalidValueException;

class Value
{
    const MOJANG_SKIN_URL = 'http://textures.minecraft.net/texture/';

    private string $url;      # 72d03c876b9ea20ca1eb30ea631..
    private string $urlFull;  # http://textures.minecraft.net/texture/72d03c876b9ea20ca1eb30ea631...
    private string $value;    # ey...

    /**
     * Constructor
     * 
     * @param string $input (skinfileUrl, fullSkinfileUrl or value)
     */
    public function __construct(string $input)
    {
        # Full URL
        if (str_contains($input, self::MOJANG_SKIN_URL)) {
            $this->urlFull = $input;
        }
        # URL (exactly 64 characters)
        else if (strlen($input) === 64) {
            $this->url = $input;
        }
        # Value 
        else {
            $this->value = $input;
        }

        # Generate Value Data
        $this->generateValueData();
    }

    /**
     * Method ensure a clean value and all url data is available
     */
    private function generateValueData()
    {
        # URL
        if (isset($this->url)) {
            $this->getFullUrlFromUrl();
            $this->getValueFromFullUrl();
        }
        # Full URL
        else if (isset($this->urlFull)) {
            $this->getUrlFromFullUrl();
            $this->getValueFromFullUrl();
        }
        # Value
        else if (isset($this->value)) {
            $this->getFullUrlFromValue();
            $this->getValueFromFullUrl(); # Clean the value
            $this->getUrlFromFullUrl();
        }
    }

    /**
     * Method get the full URL from the Value
     * 
     * @throws InvalidValueException
     */
    private function getFullUrlFromValue()
    {
        $jsonObject = json_decode(base64_decode($this->value));
        if (!is_object($jsonObject))
            throw new InvalidValueException();
        if (!isset($jsonObject->textures->SKIN->url))
            throw new InvalidValueException();
        $this->urlFull = $jsonObject->textures->SKIN->url;
    }

    /**
     * Method builds the Value from the full URL
     */
    private function getValueFromFullUrl()
    {
        $this->value = base64_encode('{"textures":{"SKIN":{"url":"' . $this->urlFull . '"}}}');
    }

    /**
     * Method get the URL from the Full URL
     * 
     * @throws InvalidValueException
     */
    private function getUrlFromFullUrl()
    {
        $url = str_replace(self::MOJANG_SKIN_URL, '', $this->urlFull);
        if (strlen($url) !== 64)
            throw new InvalidValueException();
        $this->url = $url;
    }

    /**
     * Method get the Full URL from the URL
     */
    private function getFullUrlFromUrl()
    {
        $this->urlFull = self::MOJANG_SKIN_URL . $this->url;
    }

    /**
     * Getter
     */
    public function getUrlFull(): string
    {
        return $this->urlFull;
    }
    public function getUrl(): string
    {
        return $this->url;
    }
    public function getValue(): string
    {
        return $this->value;
    }
}
