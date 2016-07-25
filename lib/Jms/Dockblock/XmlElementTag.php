<?php

    namespace Goetas\Xsd\XsdToPhp\Jms\Dockblock;

    use Zend\Code\Generator\DocBlock\Tag\TagInterface;

    /**
     * Description of XmlElementTag
     *
     * @author vladimir
     */
    class XmlElementTag implements TagInterface
    {

        protected $namespace;

        public function __construct($namespace, $jmsAlias = 'JMS\Serializer\Annotation')
        {
            $this->namespace = $namespace;
            $this->jmsAlias = $jmsAlias;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'XmlElement';
        }

        /**
         * @return string
         */
        public function generate()
        {
            $output = '@'
                . ($this->jmsAlias ? $this->jmsAlias . '\\' : '')
                . $this->getName()
                . '('
                . "namespace=\"{$this->namespace}\""
                . ')';

            return $output;
        }

    }
