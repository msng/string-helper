<?php

namespace msng\StringHelper;

class StringHelper
{
    /**
     * @var array
     */
    private $components;

    public function __construct(array $components)
    {
        $this->components = $components;
    }

    /**
     * @param string $camelCase
     * @return StringHelper
     */
    public static function fromCamel(string $camelCase): StringHelper
    {
        $camelPattern = '/(?:^.|[A-Z])[^A-Z]+/';
        preg_match_all($camelPattern, $camelCase, $matches);

        // Hold components in lower case
        $components = json_decode(strtolower(json_encode($matches[0])), true);

        return new static($components);
    }

    /**
     * @param string $snake_case
     * @return StringHelper
     */
    public static function from_snake(string $snake_case): StringHelper
    {
        $snake_case = strtolower($snake_case);

        return new static(explode('_', $snake_case));
    }

    /**
     * @return string
     */
    public function toLowerCamel()
    {
        $lowerCamel = array_shift($this->components);

        foreach ($this->components as $component) {
            $lowerCamel .= ucfirst($component);
        }

        return $lowerCamel;

    }

    /**
     * @return string
     */
    public function ToUpperCamel()
    {
        $UpperCamel = '';

        foreach ($this->components as $component) {
            $UpperCamel .= ucfirst($component);
        }

        return $UpperCamel;
    }

    /**
     * @return string
     */
    public function TO_UPPER_SNAKE(): string
    {
        $snake = implode('_', $this->components);

        return strtoupper($snake);
    }

    /**
     * @return string
     */
    public function to_lower_snake(): string
    {
        $snake = implode('_', $this->components);

        return strtolower($snake);
    }
}
