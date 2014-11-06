<?php

namespace Air\View;

interface ViewFactoryInterface
{
    /**
     * @param string $fileName The name of the file to load.
     * @return ViewInterface A view.
     */
    public function get($fileName);

    /**
     * @param array $viewPaths An array of paths to look for view files in.
     */
    public function registerPaths(array $viewPaths);

    /**
     * @param string $viewPath A view path to check.
     */
    public function addPath($viewPath);
}
