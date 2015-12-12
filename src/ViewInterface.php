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
     * Binds data to the view using property access.
     *
     * @param string $key The key.
     * @param mixed $value The value.
     */
    public function __set($key, $value);

	
    /**
     * Gets the view data using property access.
     *
     * @param string $key The key.
	 * @return mixed the view data.
     */
    public function __get($key);

	
    /**
     * Binds data to the view.
     *
     * @param string $key The key.
     * @param mixed $value The value.
     */
    public function set($key, $value);
	
	
	/**
     * Gets the view data.
     *
     * @param string $key The key.
	 * @return mixed the view data.
     */
    public function get($key);
	
	
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
