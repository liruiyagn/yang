<?php

/* update.html */
class __TwigTemplate_ab8566037ca4902107aa1720aa94ab589194beb52b65dd68524ca4c14317c941 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<form action=\"/index/upda/\" method=\"post\">
    <table>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["der"]) ? $context["der"] : null), "id", array()), "html", null, true);
        echo "\">
        <tr>
            <td>用户名</td>
            <td><input type=\"text\" name=\"name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["der"]) ? $context["der"] : null), "name", array()), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type=\"email\" name=\"email\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["der"]) ? $context["der"] : null), "email", array()), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <td>qq</td>
            <td><input type=\"number\" name=\"qq\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["der"]) ? $context["der"] : null), "qq", array()), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <td>电话</td>
            <td><input type=\"number\" name=\"teg\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["der"]) ? $context["der"] : null), "teg", array()), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"修改\"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 25,  50 => 21,  43 => 17,  36 => 13,  30 => 10,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<form action=\"/index/upda/\" method=\"post\">
    <table>
        <input type=\"hidden\" name=\"id\" value=\"{{ der.id }}\">
        <tr>
            <td>用户名</td>
            <td><input type=\"text\" name=\"name\" value=\"{{  der.name }}\"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type=\"email\" name=\"email\" value=\"{{  der.email }}\"></td>
        </tr>
        <tr>
            <td>qq</td>
            <td><input type=\"number\" name=\"qq\" value=\"{{  der.qq }}\"></td>
        </tr>
        <tr>
            <td>电话</td>
            <td><input type=\"number\" name=\"teg\" value=\"{{  der.teg }}\"></td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"修改\"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>";
    }
}
