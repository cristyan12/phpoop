<?php
declare(strict_types=1);

namespace Beleriand\Html;

use Closure;

trait Macroable
{
    protected static array $macros = [];

    public static function macro(string $method, Closure $macro): void
    {
        static::$macros[$method] = $macro;
    }

    public static function hasMacro(string $macro): bool
    {
        return isset(static::$macros[$macro]);
    }

   /**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
     * @param  array  $params
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call(string $method, array $params)
    {
        if (! static::hasMacro($method)) {
            throw new \BadMethodCallException(sprintf(
                'Method %s::%s does not exist.', static::class, $method
            ));
        }

        return call_user_func_array(
            static::$macros[$method]->bindTo($this, static::class),
            $params
        );
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
     * @param  array  $params
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public static function __callStatic(string $method, array $params)
    {
        if (! static::hasMacro($method)) {
            throw new BadMethodCallException(sprintf(
                'Method %s::%s does not exist.', static::class, $method
            ));
        }

        $macro = static::$macros[$method];

        return call_user_func_array(Closure::bind($macro, null, static::class), $params);
    }
}