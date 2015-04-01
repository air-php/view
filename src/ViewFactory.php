<?php

namespace Air\View;

abstract class ViewFactory implements ViewFactoryInterface
{
    /**
     * @var array $viewPaths An array of paths to search for views in.
     */
    protected $viewPaths = [];


    /**
     * @var string $fileExtension The file extension to use when looking for views.
     */
    protected $fileExtension = 'php';


    /**
     * @var string|null $cacheDir A directory to cache rendered templates into (enables caching).
     */
    protected $cacheDir = null;


    /**
     * @var string|null $partialsDir A directory where static partials are stored.
     */
    protected $partialsDir = null;


    /**
     * @param string $fileName The name of the file to load.
     * @return ViewInterface A view.
     */
    abstract public function get($fileName);


    /**
     * @param array $viewPaths An array of paths to look for view files in.
     */
    public function registerPaths(array $viewPaths)
    {
        $this->viewPaths = $viewPaths;
    }


    /**
     * @param string $viewPath A view path to check.
     */
    public function addPath($viewPath)
    {
        $this->viewPaths[] = $viewPath;
    }


    /**
     * Locates a view file and returns its full path.
     *
     * @param string $fileName The file name.
     * @return string|false The location of the file, or false if it cannot be found.
     * @throws \Exception
     */
    protected function find($fileName)
    {
        $fileName = $fileName . '.' . $this->fileExtension;

        foreach ($this->viewPaths as $path) {
            if (file_exists($path . $fileName)) {
                return realpath($path . $fileName);
            }
        }

        throw new \Exception("View $fileName not found.");
    }
}
