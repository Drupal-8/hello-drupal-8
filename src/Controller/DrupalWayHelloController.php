<?php
/**
 * @file
 * Contains \Drupal\drupal_way_hello\Controller\DrupalWayHelloController.
 */

namespace Drupal\drupal_way_hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DrupalWayHelloController.
 * @package Drupal\drupal_way_hello\Controller
 */
class DrupalWayHelloController extends ControllerBase {

  /**
   * @return array
   */
  public function content() {
    return [
      '#markup' => $this->t('Hello Drupal @version!', ['@version' => '8.0.0-beta9']),
    ];
  }
}
