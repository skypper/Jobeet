<?php

/* base.html.twig */
class __TwigTemplate_757836eb3da25310c45b9aa77486d81e49f8bc2cc2e3685484ccf81496daf813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t<div class=\"container\">
\t\t\t<div class=\"page-header\">
\t\t    \t<h1>Jobeet <small>A simple, yet efficient job platform</small></h1>
\t\t    </div>
\t\t\t<div class=\"row\">
\t    \t\t<ul class=\"nav nav-tabs\">
\t    \t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">All Jobs</a></li>
\t    \t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("newJob");
        echo "\">Post a Job</a></li>
\t    \t\t</ul>
\t\t\t\t<div class=\"span8\">
\t\t        \t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t\t        </div>
\t\t    </div>
        </div>
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Jobeet - Job Platform";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  94 => 26,  89 => 22,  82 => 7,  79 => 6,  73 => 5,  67 => 29,  65 => 26,  60 => 23,  58 => 22,  52 => 19,  48 => 18,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
