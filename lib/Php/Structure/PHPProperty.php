<?php
namespace Goetas\Xsd\XsdToPhp\Php\Structure;

class PHPProperty extends PHPArg
{

    /**
     * @var string
     */
    protected $visibility = 'protected';

    /**
     *
     * @var string
     */
    protected $xmlns;

    /**
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getXmlNamespace()
    {
        return $this->xmlns;
    }

    /**
     *
     * @param string $xmlns
     * @return \Goetas\Xsd\XsdToPhp\Php\Structure\PHPProperty
     */
    public function setXmlNamespace($xmlns)
    {
        $this->xmlns = $xmlns;
        return $this;
    }
}
