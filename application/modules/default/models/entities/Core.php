<?php
/**
 * Class Default_Model_Entity_Core
 *
 * @package default
 */
abstract class Default_Model_Entity_Core
{

    /**
     * @param array|null $options
     */
    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    /**
     * Set options
     *
     * @param array $options
     *
     * @return Default_Model_Entity_Core
     */
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }



}