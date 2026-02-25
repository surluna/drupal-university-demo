<?php

namespace Drupal\uni_events\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an Events Block.
 *
 * @Block(
 *   id = "uni_events_block",
 *   admin_label = @Translation("Upcoming Events"),
 *   category = @Translation("Custom"),
 * )
 */
class EventsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Demo events data
    $events = [
      [
        'title' => 'O-Week 2026',
        'day' => '15',
        'month' => 'Mar',
        'location' => 'Kambri Lawns',
      ],
      [
        'title' => 'ANU Commencement Address',
        'day' => '22',
        'month' => 'Mar',
        'location' => 'Science Building',
      ],
      [
        'title' => 'Guest Lecture: AI in Education',
        'day' => '05',
        'month' => 'Apr',
        'location' => 'Marie Reay Teaching Centre',
      ],
    ];

    return [
      '#theme' => 'uni_events_block',
      '#events' => $events,
    ];
  }

}