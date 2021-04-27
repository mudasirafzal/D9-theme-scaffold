<?php

namespace Drupal\ga_launchpad_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Routing\RouteProviderInterface;
use Drupal\Core\Url;
use Drupal\ga_launchpad_module\Form\Multistep\MultistepForm;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller class for grouping GA Launchpad setting forms
 *
 * @package Drupal\ga_launchpad_module\Controller
 */
class GaLaunchpadController extends ControllerBase {

  /**
   * Route provider service.
   *
   * @var \Drupal\Core\Routing\RouteProviderInterface
   */
  protected $routeProvider;

  /**
   * Constructs a ConfigNamesMapper.
   *
   * @param \Drupal\Core\Routing\RouteProviderInterface $route_provider
   *   The route provider.
   */
  public function __construct(RouteProviderInterface $route_provider) {
    $this->routeProvider = $route_provider;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.route_provider')
    );
  }

  /**
   * Links for different form settings.
   *
   * @return array
   *   A render array as expected by the renderer.
   */
  public function content() {
    // Admin links for this module.
    $links = [
      [
        'url' => Url::fromRoute('ga_launchpad_module.settings'),
        'title' => $this->t('GA Launchpad - Settings'),
      ],
      // Add more links here.
    ];

    return [
      '#theme' => 'ga_launchpad',
      '#links' => $links,
    ];
  }

}
