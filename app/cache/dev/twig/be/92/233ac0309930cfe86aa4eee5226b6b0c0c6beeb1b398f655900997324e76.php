<?php

/* TMSUserJoinPageBundle::layout.html.twig */
class __TwigTemplate_be92233ac0309930cfe86aa4eee5226b6b0c0c6beeb1b398f655900997324e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media//images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tms_user");
        echo "\">
                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media//images/logo.jpg"), "html", null, true);
        echo "\" alt=\"MusicSite\" />
                    </a></h1>
 
                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("tms_user");
        echo "\">Post a Job</a>
                            </div>
                        </div>
 
                        <div class=\"search\">
                            <h2>Ask for a job</h2>
                            <form action=\"\" method=\"get\">
                                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <div class=\"help\">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 
           <div id=\"footer\">
               <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media//images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media//images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                       </a>
                   </span>
                   <ul>
                       <li><a href=\"\">About Jobeet</a></li>
                       <li class=\"feed\"><a href=\"\">Full feed</a></li>
                       <li><a href=\"\">Jobeet API</a></li>
                       <li class=\"last\"><a href=\"\">Affiliates</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                Welcome to TheMusicSite.com
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/js/jquery.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "TMSUserJoinPageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 14,  128 => 13,  121 => 11,  118 => 10,  113 => 6,  110 => 5,  92 => 53,  87 => 51,  63 => 30,  53 => 23,  49 => 22,  39 => 16,  36 => 13,  34 => 10,  30 => 8,  28 => 5,  22 => 1,);
    }
}
