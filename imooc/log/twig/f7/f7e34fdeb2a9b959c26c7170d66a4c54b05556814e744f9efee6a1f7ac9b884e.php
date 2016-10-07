<?php

/* insert.html */
class __TwigTemplate_3182534f5a0fa6246ec7d02c2c827846c255591e3891da775d1ed01a5fcbed1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"/index/inse\" method=\"post\">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type=\"text\" name=\"name\" id=\"\"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type=\"email\" name=\"email\" id=\"\"></td>
        </tr>
        <tr>
            <td>qq</td>
            <td><input type=\"number\" name=\"qq\" id=\"\"></td>
        </tr>
        <tr>
            <td>电话</td>
            <td><input type=\"number\" name=\"teg\" id=\"\"></td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"提交\"></td>
            <td></td>
        </tr>
    </table>
</form>";
    }

    public function getTemplateName()
    {
        return "insert.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<form action=\"/index/inse\" method=\"post\">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type=\"text\" name=\"name\" id=\"\"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type=\"email\" name=\"email\" id=\"\"></td>
        </tr>
        <tr>
            <td>qq</td>
            <td><input type=\"number\" name=\"qq\" id=\"\"></td>
        </tr>
        <tr>
            <td>电话</td>
            <td><input type=\"number\" name=\"teg\" id=\"\"></td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"提交\"></td>
            <td></td>
        </tr>
    </table>
</form>";
    }
}
