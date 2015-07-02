<?php

/* default/index.html.twig */
class __TwigTemplate_1024cdcafcc64b6ff56992ade9b09d69611ae3dcc624baec204eab1bd66d9760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<table class=\"table\">
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Location</th>
\t\t\t<th>Position</th>
\t\t\t<th>Company</th>
\t\t\t<th></th>
\t\t</tr>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 13
            echo "    \t<tr>
    \t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "</td>
    \t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
    \t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</td>
    \t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
    \t\t<td>
    \t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showJob", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\" class=\"icon-plus\"></a>
    \t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editJob", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\" class=\"icon-edit\"></a>
    \t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removeJob", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\" class=\"icon-remove\"></a>
    \t\t</td>
    \t</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  73 => 21,  69 => 20,  65 => 19,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
