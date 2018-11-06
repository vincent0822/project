<?php

/* ./header.twig */
class __TwigTemplate_a3a33361704fbc9b2a2cb7ee830673da7e920d22b26459396a23a70ab64ce12a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "</head>
<body>

<div id=\"content\">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "</div>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"/static/css/main.css\" type=\"text/css\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - FastPhp</title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "./header.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  59 => 13,  49 => 7,  45 => 5,  42 => 4,  37 => 15,  35 => 13,  29 => 9,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="UTF-8">*/
/*         <link rel="stylesheet" href="/static/css/main.css" type="text/css" />*/
/*         <title>{% block title %}{% endblock %} - FastPhp</title>*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/* <div id="content">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
