<?php

/* item/index.twig */
class __TwigTemplate_9932a15d51f296eb2991a7d3883d8564cef30c5e822f5a96208a88b0b1e004ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./base.twig", "item/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
    <form action=\"\" method=\"get\">
        <input type=\"text\" value=\"\" name=\"keyword\">
        <input type=\"submit\" value=\"搜索\">
    </form>

    <p><a href=\"item/manage\">新建</a></p>

    <table>
        <tr>
            <th>ID</th>
            <th>内容</th>
            <th>操作</th>
        </tr>

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "            <tr >
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/item/detail/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" title=\"查看详情\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a>
                </td>
                <td>
                    <a href=\"/item/manage/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">编辑</a>
                    <a href=\"/item/delete/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">删除</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </table>
";
    }

    public function getTemplateName()
    {
        return "item/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  85 => 31,  81 => 30,  73 => 27,  68 => 25,  65 => 24,  61 => 23,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends './base.twig' %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>{{ title }}</h1>*/
/*     <form action="" method="get">*/
/*         <input type="text" value="" name="keyword">*/
/*         <input type="submit" value="搜索">*/
/*     </form>*/
/* */
/*     <p><a href="item/manage">新建</a></p>*/
/* */
/*     <table>*/
/*         <tr>*/
/*             <th>ID</th>*/
/*             <th>内容</th>*/
/*             <th>操作</th>*/
/*         </tr>*/
/* */
/*         {% for item in items %}*/
/*             <tr >*/
/*                 <td>{{ item.id }}</td>*/
/*                 <td>*/
/*                     <a href="/item/detail/{{ item.id }}" title="查看详情">{{ item.name }}</a>*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="/item/manage/{{ item.id }}">编辑</a>*/
/*                     <a href="/item/delete/{{ item.id }}">删除</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/* */
/*     </table>*/
/* {% endblock %}*/
/* */
