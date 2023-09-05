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

/* post/user-posts.html.twig */
class __TwigTemplate_5b785abbe295e3167fa5c09710d8ddd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/user-posts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/user-posts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/user-posts.html.twig", 1);
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
        echo "    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "fullName", [], "any", false, false, false, 8), "html", null, true);
        echo "
                    <small class=\"text-muted\">· @";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</small>
                </h5>

                ";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)))) {
            // line 13
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "hasFollowing", [(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })())], "method", false, false, false, 13)) {
                // line 14
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unfollow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger follow-btn\">
                            <span class=\"user-minus\"></span> Unfollow
                        </a>     
                    ";
            } else {
                // line 18
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("follow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary follow-btn\">
                            <span class=\"user-plus\"></span> Follow                          
                        </a>
                    ";
            }
            // line 22
            echo "                ";
        }
        // line 23
        echo "            </div>
        </div>
    </div>

    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.followers", ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "followers", [], "any", false, false, false, 30))], "messages"), "html", null, true);
        echo "</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "followers", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            // line 34
            echo "                    <li class=\"list-group-item\">
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_posts", ["username" => twig_get_attribute($this->env, $this->source,             // line 36
$context["follower"], "username", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                            @";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["follower"], "username", [], "any", false, false, false, 37), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </ul>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>Following</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "following", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["following"]) {
            // line 49
            echo "                    <li class=\"list-group-item\">
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_posts", ["username" => twig_get_attribute($this->env, $this->source,             // line 51
$context["following"], "username", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                            @";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["following"], "username", [], "any", false, false, false, 52), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['following'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>
        </div>
    </div>

    <div class=\"d-flex w-100 justify-content-between align-items-center border-bottom border-gray mb-0 pt-2 pb-3\">
        <h6 class=\"m-0 p-0\">My Posts</h6>         
    </div>   
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 63, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 64
            echo "        ";
            echo twig_include($this->env, $context, "post/singlePost.html.twig", ["post" => $context["post"]]);
            echo " 
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/user-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 64,  185 => 63,  176 => 56,  166 => 52,  162 => 51,  161 => 50,  158 => 49,  154 => 48,  145 => 41,  135 => 37,  131 => 36,  130 => 35,  127 => 34,  123 => 33,  117 => 30,  108 => 23,  105 => 22,  97 => 18,  89 => 14,  86 => 13,  84 => 12,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    {{ user.fullName }}
                    <small class=\"text-muted\">· @{{ user.username }}</small>
                </h5>

                {% if is_granted('ROLE_USER') and user != app.user %}
                    {% if app.user.hasFollowing(user) %}
                        <a href=\"{{ path('unfollow', {'id': user.id}) }}\" class=\"btn btn-outline-danger follow-btn\">
                            <span class=\"user-minus\"></span> Unfollow
                        </a>     
                    {% else %}
                        <a href=\"{{ path('follow', {'id': user.id}) }}\" class=\"btn btn-outline-primary follow-btn\">
                            <span class=\"user-plus\"></span> Follow                          
                        </a>
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>{{ 'user.followers'|trans({'%count%': user.followers|length}, 'messages') }}</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                {% for follower in user.followers %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('user_posts',
                            {'username': follower.username}) }}\">
                            @{{ follower.username }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>Following</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                {% for following in user.following %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('user_posts',
                            {'username': following.username}) }}\">
                            @{{ following.username }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>

    <div class=\"d-flex w-100 justify-content-between align-items-center border-bottom border-gray mb-0 pt-2 pb-3\">
        <h6 class=\"m-0 p-0\">My Posts</h6>         
    </div>   
    {% for post in posts %}
        {{ include('post/singlePost.html.twig', {'post': post}) }} 
    {% endfor %}
{% endblock %}", "post/user-posts.html.twig", "/home/manu/Projects/Micro-post-app/templates/post/user-posts.html.twig");
    }
}
