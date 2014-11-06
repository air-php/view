<?php

namespace Air\View;

abstract class Renderer implements RendererInterface
{
    /**
     * @var string|null $cacheDir A directory to cache rendered templates into (enables caching).
     */
    protected $cacheDir = null;


    /**
     * @param string|null $cacheDir A directory to cache rendered templates into (enables caching).
     */
    abstract public function __construct($cacheDir = null);


    /**
     * @param string $file The file to load.
     * @param array $data The data to inject.
     * @return string The rendered output.
     */
    abstract public function render($file, array $data);
}
