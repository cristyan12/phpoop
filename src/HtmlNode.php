<?php
declare(strict_types=1);

namespace Beleriand;

class HtmlNode
{
    protected string $tag;
    protected string $content;
    protected array $attributes = [];

    public function __construct(string $tag, string $content = '', array $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    /**
     * LLama al método get()
     *
     * @param   int|null  $default
     * @return  string|null
    */
    public function __invoke(string $name, $default = null)
    {
        return $this->get($name, $default);
    }

    /**
     * Obtiene la clave del array dado
     *
     * @param   int|null  $default
     * @return  string|null
    */
    public function get(string $name, $default = null)
    {
        return $this->attributes[$name] ?? $default;
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public static function __callStatic(string $method, array $args = []): self
    {
        $content = $args[0] ?? '';

        $attributes = $args[1] ?? [];

        return new HtmlNode($method, $content, $attributes);
    }

    public function __call(string $method, array $args = []): self
    {
        if (! isset($args[0])) {
            throw new \Exception(
                "You forgot to pass the value to the attribute $method"
            );
        }

        $this->attributes[$method] = $args[0];

        return $this;
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
