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

/* @PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig */
class __TwigTemplate_6c7bca829820cc71d91f06bb5d3cce07 extends Template
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
            'preferences_form_general' => [$this, 'block_preferences_form_general'],
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
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["generalForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "configuration_form"]]);
        yield "
  ";
        // line 31
        yield from $this->unwrap()->yieldBlock('preferences_form_general', $context, $blocks);
        // line 68
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_end');
        yield "
";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_preferences_form_general(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General", [], "Admin.Global"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 39
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "isSecure", [], "method", false, false, false, 39)) {
            // line 40
            yield "            <div class=\"form-group row\">
              <label class=\"form-control-label \">
                ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable SSL", [], "Admin.Shopparameters.Feature"), "html", null, true);
            yield "
              </label>
              <div class=\"col-sm\">
                <div class=\"input-group\">
                  <div class=\"form-control-plaintext\">
                    <a class=\"d-block\" href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sslUri"] ?? null), "html", null, true);
            yield "\">
                      ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please click here to check if your shop supports HTTPS.", [], "Admin.Shopparameters.Feature"), "html", null, true);
            yield "
                    </a>
                  </div>
                </div>
                <small class=\"form-text\">
                  ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.", [], "Admin.Shopparameters.Help"), "html", null, true);
            yield "
                </small>
              </div>
            </div>
          ";
        }
        // line 58
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'widget');
        yield "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-preferences-save-button\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig";
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
        return array (  139 => 63,  130 => 58,  122 => 53,  114 => 48,  110 => 47,  102 => 42,  98 => 40,  96 => 39,  89 => 35,  84 => 32,  77 => 31,  69 => 68,  67 => 31,  62 => 30,  55 => 29,  50 => 25,  48 => 27,  41 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/preferences.html.twig");
    }
}
