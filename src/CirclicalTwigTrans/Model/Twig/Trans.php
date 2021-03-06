<?php
namespace CirclicalTwigTrans\Model\Twig;

use \Zend\I18n\View\Helper\Translate;
use \ZfcTwig\Twig\Extension as TwigExtension;
use \ZfcTwig\View\TwigRenderer;

class Trans extends \ZfcTwig\Twig\Extension
{

    /**
     * @var TwigRenderer
     */
    protected $renderer;

    protected $translator;

    /**
     * @param TwigRenderer $renderer
     * @param Translate    $trans
     */
    public function __construct(TwigRenderer $renderer, Translate $trans)
    {
        $this->renderer     = $renderer;
        $this->translator   = $trans;
    }


    /**
     * Returns the token parser instances to add to the existing list.
     *
     * @return array An array of Twig_TokenParserInterface or Twig_TokenParserBrokerInterface instances
     */
    public function getTokenParsers()
    {
        return array(new TransParser($this->translator));
    }


    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'launchfire-translator';
    }
}

 
