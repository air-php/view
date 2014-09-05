<?php

namespace Air\View;

interface ViewInterface
{
    /**
     * @param RendererInterface $renderer The rendering engine.
     * @param string $file The file to load.
     * @param array $data The data to inject.
     */
    public function __construct(RendererInterface $renderer, $file, array $data = []);


    /**
     * Binds data to the view.
     *
     * @param string $key The key.
     * @param string $value The value.
     */
    public function __set($key, $value);


    /**
     * Gets the view data
     *
     * @param string $key The key.
     */
    public function __get($key);


    /**
     * Renders the view as a string.
     *
     * @return string The rendered view.
     */
    public function __toString();


    /**
     * Renders the view.
     *
     * @throws \Exception
     * @return string The rendered output.
     */
    public function render();
}
