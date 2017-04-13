<?php

/* base.html.twig */
class __TwigTemplate_022ab7d6741f0b904a60aa65a18dedef2329c5eb3bdeb5807fa15a8569e4cbe0 extends Twig_Template
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
        $__internal_2dceb68435e69db81ca7bf96ebed83a0c021ada746bab3e10bfa453e1f82a40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dceb68435e69db81ca7bf96ebed83a0c021ada746bab3e10bfa453e1f82a40c->enter($__internal_2dceb68435e69db81ca7bf96ebed83a0c021ada746bab3e10bfa453e1f82a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2dceb68435e69db81ca7bf96ebed83a0c021ada746bab3e10bfa453e1f82a40c->leave($__internal_2dceb68435e69db81ca7bf96ebed83a0c021ada746bab3e10bfa453e1f82a40c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ad4731bf93d881c98fcc6d0daeef53e6a8b7763e83bb0a365795faf7e85f129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad4731bf93d881c98fcc6d0daeef53e6a8b7763e83bb0a365795faf7e85f129->enter($__internal_0ad4731bf93d881c98fcc6d0daeef53e6a8b7763e83bb0a365795faf7e85f129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ad4731bf93d881c98fcc6d0daeef53e6a8b7763e83bb0a365795faf7e85f129->leave($__internal_0ad4731bf93d881c98fcc6d0daeef53e6a8b7763e83bb0a365795faf7e85f129_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13e5238354d657cf2d6b8bbda62fade6e44bc21c030c9a7305881c0a778f960f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e5238354d657cf2d6b8bbda62fade6e44bc21c030c9a7305881c0a778f960f->enter($__internal_13e5238354d657cf2d6b8bbda62fade6e44bc21c030c9a7305881c0a778f960f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_13e5238354d657cf2d6b8bbda62fade6e44bc21c030c9a7305881c0a778f960f->leave($__internal_13e5238354d657cf2d6b8bbda62fade6e44bc21c030c9a7305881c0a778f960f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ba6d49f9086d394ae3084e975b54b6343f8cd311c2e18e538d69f9ff66cf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ba6d49f9086d394ae3084e975b54b6343f8cd311c2e18e538d69f9ff66cf0c->enter($__internal_56ba6d49f9086d394ae3084e975b54b6343f8cd311c2e18e538d69f9ff66cf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56ba6d49f9086d394ae3084e975b54b6343f8cd311c2e18e538d69f9ff66cf0c->leave($__internal_56ba6d49f9086d394ae3084e975b54b6343f8cd311c2e18e538d69f9ff66cf0c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ae83be13b09d291ec62793dcf32b60f43b9ee451b744a936be41ce74dd17900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae83be13b09d291ec62793dcf32b60f43b9ee451b744a936be41ce74dd17900->enter($__internal_2ae83be13b09d291ec62793dcf32b60f43b9ee451b744a936be41ce74dd17900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ae83be13b09d291ec62793dcf32b60f43b9ee451b744a936be41ce74dd17900->leave($__internal_2ae83be13b09d291ec62793dcf32b60f43b9ee451b744a936be41ce74dd17900_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\LP_SIO\\SiteSIO\\app\\Resources\\views\\base.html.twig");
    }
}
