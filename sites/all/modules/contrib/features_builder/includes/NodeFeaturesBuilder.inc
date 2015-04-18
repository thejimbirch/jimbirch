<?php

class NodeFeaturesBuilder extends EntityFeaturesBuilder {

  protected $type;

  public function __construct($name) {
    parent::__construct($name);
    $this->type = substr($this->name, 5);
  }

  public static function listFeatures() {
    $features = array();
    foreach (features_builder_get_exportables('node') as $name => $label) {
      $features["node_$name"] = $label;
    }
    return $features;
  }

  /**
   * {@inheritdoc}
   */
  public function package() {
    return 'Content';
  }

  protected function setComponents() {
    // Node-specific variables.
    $this->setNamedComponents('node', array($this->type));
    $this->setNamedComponents('variable', array('menu_options_' . $this->type));
    $this->setNamedComponents('variable', array('menu_parent_' . $this->type));
    $this->setNamedComponents('variable', array('node_options_' . $this->type));
    $this->setNamedComponents('variable', array('node_preview_' . $this->type));
    $this->setNamedComponents('variable', array('node_submitted_' . $this->type));


    // Add Fields and Field Groups assigned to the bundle.
    $this->setNamedComponents('dependencies', array($this->prefix . '_fields'));
    $bundle = substr($this->name, 5);
    $this->setFields('node', $bundle);
  }

}
