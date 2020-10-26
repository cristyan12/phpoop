<?php

namespace Beleriand;

class HtmlNode
{
    protected string $tag;
    protected ?string $content = null;
    protected array $attributes = [];

    public function __construct(string $tag, ?string $content = null, array $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function render(): string
    {
        $result = "<{$this->tag} {$this->renderAttributes()}>";

        if ($this->content != null) {
            $result .= $this->content;

            $result .= "</{$this->tag}>";
        }

        return $result;
    }

    protected function renderAttributes(): string
    {
        $result = "";

        foreach ($this->attributes as $name => $value) {
            $result .= sprintf(' %s="%s"', $name, $value);
        }

        return $result;
    }
}
