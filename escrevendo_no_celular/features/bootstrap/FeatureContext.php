<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;


if(file_exists($bootscript = __DIR__ . '/../support/bootstrap.php')){
    require_once($bootscript);
}


/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
    }

    private $celular;

     /**
     * @Given /^que o usuário possui um celular sem teclado QWERTY$/
     */
    public function queOUsuarioPossuiUmCelularSemTecladoQwerty()
    {
        require_once 'DojoPuzzles/Celular.php';

        $this->celular = new DojoPuzzles\Celular();
    }

    /**
     * @Given /^inseriu os dígitos "([^"]*)"$/
     */
    public function inseriuOsDigitos($digitos)
    {
        $this->celular->setDigitos($digitos);
    }

    /**
     * @Given /^devemos obter o texto$/
     */
    public function devemosObterOTexto(PyStringNode $string)
    {
        assertNotEmpty($this->celular->getTexto());
        assertEquals((string)$string, $this->celular->getTexto());
    }
}
