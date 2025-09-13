<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig */
class __TwigTemplate_01945d9c2880f73015fee9d25fdde242 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\" data-block=\"configuration_information\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration information", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must provide this information when reporting an issue on GitHub or on the forum.", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</p>
      </div>
    </div>

    <div class=\"card\" data-block=\"server_information\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        ";
        // line 45
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "hostname", [], "any", false, false, false, 45))) {
            // line 46
            yield "          <p class=\"mb-0\">
            <strong>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server Hostname:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "hostname", [], "any", false, false, false, 47), "html", null, true);
            yield "
          </p>
        ";
        }
        // line 50
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "uname", [], "any", false, false, false, 50))) {
            // line 51
            yield "          <p class=\"mb-0\">
            <strong>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "uname", [], "any", false, false, false, 52), "html", null, true);
            yield "
          </p>
        ";
        }
        // line 55
        yield "        <p class=\"mb-0\">
          <strong>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server software version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 56), "version", [], "any", false, false, false, 56), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PHP version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 59), "php", [], "any", false, false, false, 59), "version", [], "any", false, false, false, 59), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Memory limit:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 62), "php", [], "any", false, false, false, 62), "memoryLimit", [], "any", false, false, false, 62), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max execution time:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 65), "php", [], "any", false, false, false, 65), "maxExecutionTime", [], "any", false, false, false, 65), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload Max File size:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 68), "php", [], "any", false, false, false, 68), "maxFileSizeUpload", [], "any", false, false, false, 68), "html", null, true);
        yield "
        </p>
        ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "instaWebInstalled", [], "any", false, false, false, 70)) {
            // line 71
            yield "          <p class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PageSpeed module for Apache installed (mod_instaweb)", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</p>
        ";
        }
        // line 73
        yield "      </div>
    </div>

    <div class=\"card\" data-block=\"database_information\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Database information", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 82), "version", [], "any", false, false, false, 82), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL server:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 85), "server", [], "any", false, false, false, 85), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL name:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL user:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 91), "user", [], "any", false, false, false, 91), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tables prefix:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 94), "prefix", [], "any", false, false, false, 94), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL engine:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 97), "engine", [], "any", false, false, false, 97), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL driver:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 100), "driver", [], "any", false, false, false, 100), "html", null, true);
        yield "
        </p>
      </div>
    </div>

    <div class=\"card\" data-block=\"list_overrides\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of overrides", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        ";
        // line 110
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "overrides", [], "any", false, false, false, 110))) {
            // line 111
            yield "          <div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">
            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No overrides have been found.", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "
          </p></div>
        ";
        } else {
            // line 115
            yield "          <ul>
            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "overrides", [], "any", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
                // line 117
                yield "              <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["override"], "html", null, true);
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['override'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "          </ul>
        ";
        }
        // line 121
        yield "      </div>
    </div>
  </div>
  <div class=\"col-lg-6\">
    <div class=\"card\" data-block=\"store_information\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store information", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 131), "version", [], "any", false, false, false, 131), "html", null, true);
        yield "
        </p>
        ";
        // line 133
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminStoreInformation");
        yield "
        <p class=\"mb-0\">
          <strong>";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop URL:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 135), "url", [], "any", false, false, false, 135), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop path:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 138), "path", [], "any", false, false, false, 138), "html", null, true);
        yield "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current theme in use:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 141), "theme", [], "any", false, false, false, 141), "html", null, true);
        yield "
        </p>
      </div>
    </div>

    <div class=\"card\" data-block=\"mail_configuration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        ";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "isNativePHPmail", [], "any", false, false, false, 151)) {
            // line 152
            yield "          <p class=\"mb-0\">
            <strong>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using /usr/sbin/sendmail", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "
          </p>
        ";
        } else {
            // line 156
            yield "          <p class=\"mb-0\">
            <strong>";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using your own SMTP parameters.", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP server:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 160), "server", [], "any", false, false, false, 160), "html", null, true);
            yield "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP username:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong>
            ";
            // line 164
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 164), "user", [], "any", false, false, false, 164))) {
                // line 165
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                yield "
            ";
            } else {
                // line 167
                yield "              <span style=\"color:red;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                yield "</span>
            ";
            }
            // line 169
            yield "          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP password:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong>
            ";
            // line 172
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 172), "password", [], "any", false, false, false, 172))) {
                // line 173
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                yield "
            ";
            } else {
                // line 175
                yield "              <span style=\"color:red;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                yield "</span>
            ";
            }
            // line 177
            yield "          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Encryption:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 179), "encryption", [], "any", false, false, false, 179), "html", null, true);
            yield "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP port:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 182), "port", [], "any", false, false, false, 182), "html", null, true);
            yield "
          </p>
        ";
        }
        // line 185
        yield "      </div>
    </div>

    <div class=\"card\" data-block=\"your_information\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your information", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your web browser:", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userAgent"] ?? null), "html", null, true);
        yield "
        </p>
      </div>
    </div>

    <div class=\"card\" id=\"checkConfiguration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info</i> ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check your configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        ";
        // line 204
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "failRequired", [], "any", false, false, false, 204) == false)) {
            // line 205
            yield "          <p class=\"mb-0\">
            <strong>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong>
            <span class=\"text-success\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
            yield "</span>
          </p>
        ";
        } else {
            // line 210
            yield "          <p class=\"mb-0\">
            <strong>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "</strong>
            <span class=\"text-danger\">";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
            yield "</span>
          </p>
          <ul>
            ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "testsRequired", [], "any", false, false, false, 215));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 216
                yield "              ";
                if (("fail" == $context["value"])) {
                    // line 217
                    yield "                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "testsErrors", [], "any", false, false, false, 217)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["key"]] ?? null) : null), "html", null, true);
                    yield "</li>
              ";
                }
                // line 219
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            yield "          </ul>
        ";
        }
        // line 222
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", true, true, false, 222)) {
            // line 223
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", false, false, false, 223) == false)) {
                // line 224
                yield "            <p class=\"mb-0\">
              <strong>";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                yield "</strong>
              <span class=\"text-success\">";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
                yield "</span>
            </p>
          ";
            } else {
                // line 229
                yield "            <p class=\"mb-0\">
              <strong>";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                yield "</strong>
              <span class=\"text-danger\">";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
                yield "</span>
            </p>
            <ul>
              ";
                // line 234
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "testsOptional", [], "any", false, false, false, 234));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 235
                    yield "                ";
                    if (("fail" == $context["value"])) {
                        // line 236
                        yield "                  <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "testsErrors", [], "any", false, false, false, 236)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null), "html", null, true);
                        yield "</li>
                ";
                    }
                    // line 238
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 239
                yield "            </ul>
          ";
            }
            // line 241
            yield "        ";
        }
        // line 242
        yield "      </div>
    </div>
  </div>
</div>

<div class=\"card\" data-block=\"list_changed_files\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">info</i> ";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of changed files", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
  </h3>
  <div class=\"card-body\" id=\"changedFiles\">
    <i class=\"material-icons\">loop</i> ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checking files...", [], "Admin.Advparameters.Notification"), "html", null, true);
        yield "
  </div>
</div>

<script>
  \$(function()
  {
    var translations = {
      missing: '";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Missing files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        yield "',
      updated: '";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Updated files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        yield "',
      changesDetected: '";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changed/missing files have been detected.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        yield "',
      noChangeDetected: '";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No change has been detected in your files.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        yield "'
    };

    \$.ajax({
      type: 'POST',
      url: '";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_information_check_files");
        yield "',
      data: {},
      dataType: 'json',
      success: function(json)
      {
        var tab = {
          'missing': translations.missing,
          'updated': translations.updated,
        };

        if (json.missing.length || json.updated.length) {
          \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">' + translations.changesDetected + '</p></div>');
        } else {
          \$('#changedFiles').html('<div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">' + translations.noChangeDetected + '</p></div>');
        }

        \$.each(tab, function(key, lang) {
          if (json[key].length) {
            var html = \$('<ul>').attr('id', key+'_files');
            \$(json[key]).each(function(key, file) {
              html.append(\$('<li>').html(file))
            });
            \$('#changedFiles')
              .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
              .append(html);
          }
        });
      }
    });
  });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  613 => 268,  605 => 263,  601 => 262,  597 => 261,  593 => 260,  582 => 252,  576 => 249,  567 => 242,  564 => 241,  560 => 239,  554 => 238,  548 => 236,  545 => 235,  541 => 234,  535 => 231,  531 => 230,  528 => 229,  522 => 226,  518 => 225,  515 => 224,  512 => 223,  509 => 222,  505 => 220,  499 => 219,  493 => 217,  490 => 216,  486 => 215,  480 => 212,  476 => 211,  473 => 210,  467 => 207,  463 => 206,  460 => 205,  458 => 204,  452 => 201,  440 => 194,  433 => 190,  426 => 185,  418 => 182,  410 => 179,  406 => 177,  400 => 175,  394 => 173,  392 => 172,  388 => 171,  384 => 169,  378 => 167,  372 => 165,  370 => 164,  366 => 163,  358 => 160,  350 => 157,  347 => 156,  339 => 153,  336 => 152,  334 => 151,  328 => 148,  316 => 141,  308 => 138,  300 => 135,  295 => 133,  288 => 131,  281 => 127,  273 => 121,  269 => 119,  260 => 117,  256 => 116,  253 => 115,  247 => 112,  244 => 111,  242 => 110,  236 => 107,  224 => 100,  216 => 97,  208 => 94,  200 => 91,  192 => 88,  184 => 85,  176 => 82,  169 => 78,  162 => 73,  156 => 71,  154 => 70,  147 => 68,  139 => 65,  131 => 62,  123 => 59,  115 => 56,  112 => 55,  104 => 52,  101 => 51,  98 => 50,  90 => 47,  87 => 46,  85 => 45,  79 => 42,  70 => 36,  64 => 33,  58 => 29,  51 => 28,  40 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/system_information.html.twig");
    }
}
