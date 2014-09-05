<?php

namespace Air\View;

interface RendererInterface
{
    /**
     * @param string $file The file to load.
     * @param array $data The data to inject.
     * @return string The rendered output.
     */
    public function render($file, array $data);
}
