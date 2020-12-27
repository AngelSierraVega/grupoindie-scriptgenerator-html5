<?php

namespace GIndie\ScriptGenerator\HTML5\Tables;

/**
 * The <table> tag defines an HTML table.
 * 
 * @link <https://www.w3schools.com/tags/tag_table.asp>
 *
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Tables
 *
 * @version 00.80
 * @since 18-02-24
 * @edit SG-HTML5-TBLS.00.01
 * - Created uses, __construct(), addHeader(), getHeader(), handleHeaderData(), $headers
 * @todo
 * - Create Body methods
 * - Create Footer methods
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Table extends \GIndie\ScriptGenerator\HTML5\Node
{

    /**
     * @since SG-HTML5-TBLS.00.01
     */
//    use \GIndie\ScriptGenerator\HTML5\Attribute\GlobalAttributes;
    use Traits\RowHandler;

    /**
     * @since SG-HTML5-TBLS.00.01
     */
    public function __construct()
    {
        parent::__construct(static::TYPE_DEFAULT, "table");
    }

    /**
     * 
     * @param type $header
     * @return $this
     * @since SG-HTML5-TBLS.00.01
     */
    public function addHeader($header)
    {
        $this->headers[] = $this->addContentGetPointer(static::handleHeaderData($header));
        return $this;
    }

    /**
     * 
     * @param type $index
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Header|null
     * @since SG-HTML5-TBLS.00.01
     */
    public function getHeader($index = 0)
    {
        return isset($this->headers[$index]) ? $this->headers[$index] : null;
    }

    /**
     * 
     * @param type $data
     * @return type
     * @since SG-HTML5-TBLS.00.01
     * @edit 18-04-10
     */
    protected function handleHeaderData($data)
    {
        $data = new Header($data);
        return $data;
    }

    /**
     * 
     * @param \GIndie\ScriptGenerator\HTML5\Tables\Footer $data
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Footer
     * @since 18-10-15
     */
    protected function handleFooterData($data)
    {
        $data = new Footer($data);
        return $data;
    }

    /**
     *
     * @var type 
     * @since SG-HTML5-TBLS.00.01
     */
    protected $headers = [];
    
    /**
     *
     * @var type 
     * @since 18-10-15
     */
    protected $footers = [];

    public function addBody($body)
    {
        
    }

    public function getBody($index = 0)
    {
        
    }

    /**
     * 
     * @param type $footer
     * @return $this
     * @since 18-10-15
     */
    public function addFooter($footer)
    {
        $this->footers[] = $this->addContentGetPointer(static::handleFooterData($footer));
        return $this;
    }

    /**
     * 
     * @param int $index
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Footer
     * @since 18-10-15
     */
    public function getFooter($index = 0)
    {
        return isset($this->footers[$index]) ? $this->footers[$index] : null;
    }

}
