<?php

class UserFeaturesBuilder extends FeaturesBuilderBase {

  protected $variables = array(
    'anonymous',
    'field_bundle_settings_user__user',
  );

  /**
   * {@inheritdoc}
   */
  public static function listFeatures() {
    return array('users' => t('Users'));
  }

  /**
   * {@inheritdoc}
   */
  public function package() {
    return 'Configuration';
  }

  /**
   * {@inheritdoc}
   */
  protected function setComponents() {
    $this->setAllComponents('user_role');
    $this->setAllComponents('user_permission');
    $this->setRegexComponents('field_instance', '/^user-.*/');
    $this->setNamedComponents('variable', $this->variables);
    $this->setRegexComponents('variable', '/^user_.*/');

    // Add field groups.
    $this->setRegexComponents('field_group', "/^group_[a-z0-9_]*\|user\|/");
    if (!empty($this->components['field_group'])) {
      $dependencies[] = 'field_group';
    }
  }

}
