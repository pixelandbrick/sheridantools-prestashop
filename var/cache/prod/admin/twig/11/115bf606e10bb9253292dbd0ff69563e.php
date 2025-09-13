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

/* @PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig */
class __TwigTemplate_0960ab7b8abbba3810b980ab9f7bb924 extends Template
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
            'administration_form_general' => [$this, 'block_administration_form_general'],
            'administration_form_upload_quota' => [$this, 'block_administration_form_upload_quota'],
            'administration_form_notifications' => [$this, 'block_administration_form_notifications'],
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
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["uploadQuotaForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["notificationsForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_administration_general_save")]);
        yield "
  ";
        // line 33
        yield from $this->unwrap()->yieldBlock('administration_form_general', $context, $blocks);
        // line 51
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_end');
        yield "

  ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadQuotaForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_administration_upload_quota_save")]);
        yield "
  ";
        // line 54
        yield from $this->unwrap()->yieldBlock('administration_form_upload_quota', $context, $blocks);
        // line 72
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadQuotaForm"] ?? null), 'form_end');
        yield "

  ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["notificationsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_administration_notifications_save")]);
        yield "
  ";
        // line 75
        yield from $this->unwrap()->yieldBlock('administration_form_notifications', $context, $blocks);
        // line 102
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["notificationsForm"] ?? null), 'form_end');
        yield "
";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_form_general(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "    <div class=\"card\" id=\"configuration_fieldset_general\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General", [], "Admin.Global"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'widget');
        yield "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_form_upload_quota(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "    <div class=\"card\" id=\"configuration_fieldset_upload\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">file_upload</i>
        ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload quota", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["uploadQuotaForm"] ?? null), 'widget');
        yield "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_form_notifications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "    <div class=\"card\" id=\"configuration_fieldset_notifications\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">priority_high</i>
        ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notifications", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notifications are numbered bubbles displayed at the very top of your back office, right next to the shop's name. They display the number of new items since you last clicked on them.", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["notificationsForm"] ?? null), 'widget');
        yield "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 97
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
        return "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig";
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
        return array (  220 => 97,  212 => 92,  203 => 86,  193 => 79,  188 => 76,  181 => 75,  171 => 67,  163 => 62,  156 => 58,  151 => 55,  144 => 54,  134 => 46,  126 => 41,  119 => 37,  114 => 34,  107 => 33,  99 => 102,  97 => 75,  93 => 74,  87 => 72,  85 => 54,  81 => 53,  75 => 51,  73 => 33,  68 => 32,  61 => 31,  56 => 25,  54 => 29,  52 => 28,  50 => 27,  43 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/administration.html.twig");
    }
}
