<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_74a16798c60fcbeb19dc2889cc45d73aead6569893ad474f07a001c925c01b20 extends Twig_Template
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
        $__internal_ad6de2d4ca918239108cb8be85ea262a95c0f780e31a8d7490c92bbb16043e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6de2d4ca918239108cb8be85ea262a95c0f780e31a8d7490c92bbb16043e83->enter($__internal_ad6de2d4ca918239108cb8be85ea262a95c0f780e31a8d7490c92bbb16043e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad6de2d4ca918239108cb8be85ea262a95c0f780e31a8d7490c92bbb16043e83->leave($__internal_ad6de2d4ca918239108cb8be85ea262a95c0f780e31a8d7490c92bbb16043e83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f02a26b60714a1eb74bb4aa1b651b119f94a97b393aed856ea9626a975173659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02a26b60714a1eb74bb4aa1b651b119f94a97b393aed856ea9626a975173659->enter($__internal_f02a26b60714a1eb74bb4aa1b651b119f94a97b393aed856ea9626a975173659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f02a26b60714a1eb74bb4aa1b651b119f94a97b393aed856ea9626a975173659->leave($__internal_f02a26b60714a1eb74bb4aa1b651b119f94a97b393aed856ea9626a975173659_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_343579b6bb9014cc123495d3c2e19222be9f7e83b82dc43d5c3c0b8d6687b971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343579b6bb9014cc123495d3c2e19222be9f7e83b82dc43d5c3c0b8d6687b971->enter($__internal_343579b6bb9014cc123495d3c2e19222be9f7e83b82dc43d5c3c0b8d6687b971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_343579b6bb9014cc123495d3c2e19222be9f7e83b82dc43d5c3c0b8d6687b971->leave($__internal_343579b6bb9014cc123495d3c2e19222be9f7e83b82dc43d5c3c0b8d6687b971_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a277dc54ad42730431bfb7aa34ba41333f76e17648dc4b32c20fd11d1ce7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a277dc54ad42730431bfb7aa34ba41333f76e17648dc4b32c20fd11d1ce7e6->enter($__internal_09a277dc54ad42730431bfb7aa34ba41333f76e17648dc4b32c20fd11d1ce7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_09a277dc54ad42730431bfb7aa34ba41333f76e17648dc4b32c20fd11d1ce7e6->leave($__internal_09a277dc54ad42730431bfb7aa34ba41333f76e17648dc4b32c20fd11d1ce7e6_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\LP_SIO\\SiteSIO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
