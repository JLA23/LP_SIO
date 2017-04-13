<?php

/* base.html.twig */
class __TwigTemplate_bd01b9a05458c95223461e713d035e3d6ea47dcc794bdc4224bda025b2cdc8e3 extends Twig_Template
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
        $__internal_8cf40b7c245f6d4cd9b8d8bc434105e8cc899d4ae5ec3541161b5f6c8ebb2023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf40b7c245f6d4cd9b8d8bc434105e8cc899d4ae5ec3541161b5f6c8ebb2023->enter($__internal_8cf40b7c245f6d4cd9b8d8bc434105e8cc899d4ae5ec3541161b5f6c8ebb2023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8cf40b7c245f6d4cd9b8d8bc434105e8cc899d4ae5ec3541161b5f6c8ebb2023->leave($__internal_8cf40b7c245f6d4cd9b8d8bc434105e8cc899d4ae5ec3541161b5f6c8ebb2023_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_53c68232b555843af77522f34a53b5edba858c0a533c7a7cb7ce8929064c0282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c68232b555843af77522f34a53b5edba858c0a533c7a7cb7ce8929064c0282->enter($__internal_53c68232b555843af77522f34a53b5edba858c0a533c7a7cb7ce8929064c0282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_53c68232b555843af77522f34a53b5edba858c0a533c7a7cb7ce8929064c0282->leave($__internal_53c68232b555843af77522f34a53b5edba858c0a533c7a7cb7ce8929064c0282_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a77e7053bdd1a278a29f12d2b1b3c319a6705cc155c623aec0f40fb44b3c64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a77e7053bdd1a278a29f12d2b1b3c319a6705cc155c623aec0f40fb44b3c64b->enter($__internal_5a77e7053bdd1a278a29f12d2b1b3c319a6705cc155c623aec0f40fb44b3c64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a77e7053bdd1a278a29f12d2b1b3c319a6705cc155c623aec0f40fb44b3c64b->leave($__internal_5a77e7053bdd1a278a29f12d2b1b3c319a6705cc155c623aec0f40fb44b3c64b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_781571bd598455e28a275c0f6f80d3513f955e4771858c57cfc4f61882bf4a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781571bd598455e28a275c0f6f80d3513f955e4771858c57cfc4f61882bf4a88->enter($__internal_781571bd598455e28a275c0f6f80d3513f955e4771858c57cfc4f61882bf4a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_781571bd598455e28a275c0f6f80d3513f955e4771858c57cfc4f61882bf4a88->leave($__internal_781571bd598455e28a275c0f6f80d3513f955e4771858c57cfc4f61882bf4a88_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a79736a721327f0962d347e66b5a300e35cbe030e6237a189153467603d4b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a79736a721327f0962d347e66b5a300e35cbe030e6237a189153467603d4b74->enter($__internal_2a79736a721327f0962d347e66b5a300e35cbe030e6237a189153467603d4b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a79736a721327f0962d347e66b5a300e35cbe030e6237a189153467603d4b74->leave($__internal_2a79736a721327f0962d347e66b5a300e35cbe030e6237a189153467603d4b74_prof);

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
", "base.html.twig", "C:\\wamp64\\projets\\LP_SIO\\SiteSIO\\app\\Resources\\views\\base.html.twig");
    }
}
