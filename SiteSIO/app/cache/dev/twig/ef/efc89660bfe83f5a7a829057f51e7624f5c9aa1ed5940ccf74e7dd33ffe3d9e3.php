<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a73bd6261524fd7b9d3ca7c331f7291f4b689658b66b7c46a967a01117df8cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a39cf4cfc60f540dc50dd422afbb7dfb1949a44b19efe8995676219528241c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a39cf4cfc60f540dc50dd422afbb7dfb1949a44b19efe8995676219528241c6->enter($__internal_8a39cf4cfc60f540dc50dd422afbb7dfb1949a44b19efe8995676219528241c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a39cf4cfc60f540dc50dd422afbb7dfb1949a44b19efe8995676219528241c6->leave($__internal_8a39cf4cfc60f540dc50dd422afbb7dfb1949a44b19efe8995676219528241c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7be302bce326a9709ae949f58eace7b6a3fea31fe1ee335272af1203f304d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7be302bce326a9709ae949f58eace7b6a3fea31fe1ee335272af1203f304d95->enter($__internal_d7be302bce326a9709ae949f58eace7b6a3fea31fe1ee335272af1203f304d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7be302bce326a9709ae949f58eace7b6a3fea31fe1ee335272af1203f304d95->leave($__internal_d7be302bce326a9709ae949f58eace7b6a3fea31fe1ee335272af1203f304d95_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab9247fd860ded054e16f4618484874dfd295117d542b90a9ca7c21b17cf5cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9247fd860ded054e16f4618484874dfd295117d542b90a9ca7c21b17cf5cce->enter($__internal_ab9247fd860ded054e16f4618484874dfd295117d542b90a9ca7c21b17cf5cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ab9247fd860ded054e16f4618484874dfd295117d542b90a9ca7c21b17cf5cce->leave($__internal_ab9247fd860ded054e16f4618484874dfd295117d542b90a9ca7c21b17cf5cce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e003f4052022b5cd06de646dd4610573c544d5104c1fd0a422d653235ccca8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e003f4052022b5cd06de646dd4610573c544d5104c1fd0a422d653235ccca8d->enter($__internal_5e003f4052022b5cd06de646dd4610573c544d5104c1fd0a422d653235ccca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5e003f4052022b5cd06de646dd4610573c544d5104c1fd0a422d653235ccca8d->leave($__internal_5e003f4052022b5cd06de646dd4610573c544d5104c1fd0a422d653235ccca8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\projets\\LP_SIO\\SiteSIO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
