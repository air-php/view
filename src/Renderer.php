<?php

namespace Air\View;

abstract class Renderer implements RendererInterface
{
    /**
     * @param string $file The file to load.
     * @param array $data The data to inject.
     * @return string The rendered output.
     */
    abstract public function render($file, array $data);
}
