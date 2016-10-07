<?php

/* index.html */
class __TwigTemplate_5cf762f063cdd1bcb10d8dcdd296f480561b14dcde8a212708bd2077ea076583 extends Twig_Template
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
        echo "    <table>
        <tr>
            <td>id</td>
            <td>用户名</td>
            <td>email</td>
            <td>qq</td>
            <td>电话</td>
            <td>操作</td>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["der"]) ? $context["der"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ders"]) {
            // line 11
            echo "        <tr>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["ders"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["ders"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ders"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["ders"], "qq", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["ders"], "teg", array()), "html", null, true);
            echo "</td>
            <td><a href=\"index/delete/id/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ders"], "id", array()), "html", null, true);
            echo "\">删除</a> | <a href=\"index/test/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ders"], "id", array()), "html", null, true);
            echo "\">修改</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ders'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </table>
    <a href=\"index/insert\">添加</a>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    public function getSource()
    {
        return "    <table>
        <tr>
            <td>id</td>
            <td>用户名</td>
            <td>email</td>
            <td>qq</td>
            <td>电话</td>
            <td>操作</td>
        </tr>
        {% for ders in der %}
        <tr>
            <td>{{ ders.id }}</td>
            <td>{{ ders.name }}</td>
            <td>{{ ders.email }}</td>
            <td>{{ ders.qq }}</td>
            <td>{{ ders.teg }}</td>
            <td><a href=\"index/delete/id/{{ders.id}}\">删除</a> | <a href=\"index/test/id/{{ders.id}}\">修改</a></td>
        </tr>
        {% endfor %}
    </table>
    <a href=\"index/insert\">添加</a>
";
    }
}
