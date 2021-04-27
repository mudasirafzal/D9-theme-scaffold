<?php

namespace Drupal\ga_launchpad_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides settings for BMC forms.
 *
 * @package Drupal\ga_launchpad_module\Form
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['ga_launchpad_module.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ga_launchpad_module_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $config = $this->config('ga_launchpad_module.settings');

    $form['override_admintheme_css'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Override admin theme'),
      '#default_value' => $config->get('override_admintheme_css'),
      '#description' => $this->t("When it's on, checkbox will appear bigger and custom css will apply to admin pages from: ga_launchpad_module/css/custom_admin_styles.css file."),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('ga_launchpad_module.settings')
      ->set('override_admintheme_css', $form_state->getValue('override_admintheme_css'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
