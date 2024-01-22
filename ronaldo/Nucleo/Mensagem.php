<?php
/**
 * @author Pyerre de Melo Guimarães
 */
class Mensagem
{   //Atributos são características de classes
    //Podemos mudar a forma como elas podem ser acessadas através de private, public e protected

    public $texto;
    private $css;

    //Método seria o que a classe fará (funções dentro de classes)

    /**
     * Método responsável pela renderização
     * 
     */
    public function renderizar($texto = ''): string
    {
        return $this -> $texto = $this -> filtrar("<h1>mensagem de teste<h1>");
    }

    private function filtrar(string $mensagem):string
    {
        return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
