<?php

    namespace Goetas\Xsd\XsdToPhp\Jms\Dockblock;

//    use Zend\Code\Generator\DocBlock\TagManager;
    use Zend\Code\Generator\DocBlock\Tag\TagInterface;
//    use Zend\Code\Reflection\DocBlock\Tag\TagInterface as ReflectionTagInterface;

    /**
     * Description of XmlNamespaceTag
     *
     * @author vladimir
     */
    class XmlNamespaceTag implements TagInterface
    {

        protected $uri;

        protected $prefix = null;

        protected $jmsAlias = null;

        public function __construct($uri, $prefix = null, $jmsAlias = 'JMS\Serializer\Annotation')
        {
            $this->uri = $uri;
            $this->prefix = $prefix;
            $this->jmsAlias = $jmsAlias;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'XmlNamespace';
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
                . "uri=\"{$this->uri}\""
                . ($this->prefix ? ", prefix=\"$this->prefix\"" : '')
                . ')';

            return $output;
        }

    }
