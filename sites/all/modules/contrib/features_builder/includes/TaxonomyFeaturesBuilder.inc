<?php

class TaxonomyFeaturesBuilder extends FeaturesBuilderBase {

  public static function listFeatures() {
    return array('taxonomy' => t('Taxonomy'));
  }

  /**
   * {@inheritdoc}
   */
  public function package() {
    return 'Configuration';
  }

  protected function setComponents() {
    $this->setAllComponents('taxonomy');

    if (!empty($this->components['taxonomy'])) {
      $this->setNamedComponents('dependencies', array('taxonomy'));
    }

    $this->setRegexComponents('field_instance', '/^taxonomy_term-/');
    $this->setRegexComponents('variable', '/^field_bundle_settings_taxonomy_term__/');

    $dependencies = array();
    if (field_info_bundles('taxonomy_term')) {
      $dependencies[] = $this->prefix . '_fields';
    }

    $info = field_info_instances('taxonomy_term');
    foreach ($info as $fields) {
      foreach ($fields as $fieldInfo) {
        $dependencies[] = $fieldInfo['widget']['module'];
        foreach ($fieldInfo as $display) {
          $dependencies[] = !empty($display['module']) ? $display['module'] : NULL;
        }
      }
    }

    $dependencies = array_filter(array_unique($dependencies));
    $this->setNamedComponents('dependencies', $dependencies);
  }

}
