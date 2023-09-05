<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* post/post.html.twig */
class __TwigTemplate_4eb4f3d24d8cfa20f71bbf1fb8545774 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "post/singlePost.html.twig", ["post" => (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })())]);
        echo "
   
    ";
        // line 6
        $context["displayLikeBtn"] = "flex";
        // line 7
        echo "    ";
        $context["displayUnlikeBtn"] = "none";
        // line 8
        echo "
    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9) && twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "hasLikedBy", [twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)], "method", false, false, false, 9))) {
            // line 10
            echo "
        ";
            // line 11
            $context["displayLikeBtn"] = "none";
            // line 12
            echo "        ";
            $context["displayUnlikeBtn"] = "flex";
            // line 13
            echo "
    ";
        }
        // line 15
        echo "    
    <div class=\"pt-2\">
        <button 
            style=\"display: ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["displayLikeBtn"]) || array_key_exists("displayLikeBtn", $context) ? $context["displayLikeBtn"] : (function () { throw new RuntimeError('Variable "displayLikeBtn" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" 
            class=\"btn btn-outline-primary btn-sm like-btn\" 
            id=\"like-btn\">
            <span class=\"post-like\"></span>
            Like <span class=\"badge badge-light\" id=\"like\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "getLikedBy", [], "any", false, false, false, 22), "count", [], "any", false, false, false, 22), "html", null, true);
        echo "</span>
        </button>

        <button 
            style=\"display: ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["displayUnlikeBtn"]) || array_key_exists("displayUnlikeBtn", $context) ? $context["displayUnlikeBtn"] : (function () { throw new RuntimeError('Variable "displayUnlikeBtn" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" 
            class=\"btn btn-outline-danger btn-sm like-btn\" 
            id=\"unlike-btn\">
            <span class=\"post-unlike\"></span>
            Unlike <span class=\"badge badge-light\" id=\"unlike\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "getLikedBy", [], "any", false, false, false, 30), "count", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
        </button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>      
        var likeBtn = document.getElementById(\"like-btn\");
        var unlikeBtn = document.getElementById(\"unlike-btn\");
        var likeCount = document.getElementById(\"like\");
        var unlikeCount = document.getElementById(\"unlike\");
        var path_like = '";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "';
        var path_unlike = '";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unlike", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "';

        addOnClick(likeBtn, unlikeBtn, unlikeCount, path_like);
        addOnClick(unlikeBtn, likeBtn, likeCount, path_unlike);

        function switchButtons(btn, otherBtn) {
            btn.style.display = 'none';
            otherBtn.style.display = 'flex';
            btn.disabled = false;
        }

        function addOnClick(btn, otherBtn, likeCount, path) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                ";
        // line 59
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "                    return window.location.replace('";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "');
                ";
        }
        // line 62
        echo "               
                btn.disabled = true;

                fetch(path, {'credentials': 'include'}).then(function(res) {
                    res.json().then(function(json) {
                        likeCount.innerText = json.count;
                        switchButtons(btn, otherBtn);
                    });
                }) 
                .catch(function(error) {
                    console.log(error);
                    switchButtons(btn, otherBtn);
                });
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 62,  182 => 60,  180 => 59,  162 => 44,  158 => 43,  147 => 36,  137 => 35,  123 => 30,  116 => 26,  109 => 22,  102 => 18,  97 => 15,  93 => 13,  90 => 12,  88 => 11,  85 => 10,  83 => 9,  80 => 8,  77 => 7,  75 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ include('post/singlePost.html.twig', {'post': post}) }}
   
    {% set displayLikeBtn = \"flex\" %}
    {% set displayUnlikeBtn = \"none\" %}

    {% if app.user and post.hasLikedBy(app.user) %}

        {% set displayLikeBtn = \"none\" %}
        {% set displayUnlikeBtn = \"flex\" %}

    {% endif %}
    
    <div class=\"pt-2\">
        <button 
            style=\"display: {{ displayLikeBtn }}\" 
            class=\"btn btn-outline-primary btn-sm like-btn\" 
            id=\"like-btn\">
            <span class=\"post-like\"></span>
            Like <span class=\"badge badge-light\" id=\"like\">{{ post.getLikedBy.count }}</span>
        </button>

        <button 
            style=\"display: {{ displayUnlikeBtn }}\" 
            class=\"btn btn-outline-danger btn-sm like-btn\" 
            id=\"unlike-btn\">
            <span class=\"post-unlike\"></span>
            Unlike <span class=\"badge badge-light\" id=\"unlike\">{{ post.getLikedBy.count }}</span>
        </button>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>      
        var likeBtn = document.getElementById(\"like-btn\");
        var unlikeBtn = document.getElementById(\"unlike-btn\");
        var likeCount = document.getElementById(\"like\");
        var unlikeCount = document.getElementById(\"unlike\");
        var path_like = '{{ path(\"like\", {\"id\": post.id}) }}';
        var path_unlike = '{{ path(\"unlike\", {\"id\": post.id}) }}';

        addOnClick(likeBtn, unlikeBtn, unlikeCount, path_like);
        addOnClick(unlikeBtn, likeBtn, likeCount, path_unlike);

        function switchButtons(btn, otherBtn) {
            btn.style.display = 'none';
            otherBtn.style.display = 'flex';
            btn.disabled = false;
        }

        function addOnClick(btn, otherBtn, likeCount, path) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                {% if not app.user %}
                    return window.location.replace('{{ path(\"register\") }}');
                {% endif %}
               
                btn.disabled = true;

                fetch(path, {'credentials': 'include'}).then(function(res) {
                    res.json().then(function(json) {
                        likeCount.innerText = json.count;
                        switchButtons(btn, otherBtn);
                    });
                }) 
                .catch(function(error) {
                    console.log(error);
                    switchButtons(btn, otherBtn);
                });
            });
        }
    </script>
{% endblock %}", "post/post.html.twig", "/home/manu/Projects/Micro-post-app/templates/post/post.html.twig");
    }
}
