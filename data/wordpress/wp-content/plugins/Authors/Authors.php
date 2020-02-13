<?php
/*
Plugin Name:  Author
Plugin URI:   https://www.gaido.fr
Description:  Mon deuxième plugin
Version:      1.0
Author:       leila
Author URI:   https://www.gaido.fr/romain
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('WPINC')) {
  die;
}

$Author = new Author();

class Author
{
  public function __construct()
  {
    $this->hooks();
  }

  public function hooks()
  {
    if (is_admin()) {
      add_action('add_meta_boxes', [$this, 'add_meta_boxes'], 10, 1);
      add_action('save_post', [$this, 'save_form'], 10, 1);
    } else {
      add_filter('pre_get_document_title', [$this, 'title'], 15);
      add_action('wp_head', [$this, 'desc'], 10, 1);
    }
  }

  public function add_meta_boxes()
  {
    add_meta_box('seo-meta-box', __('Mon référencement'), [$this, 'display_form'], 'page', 'normal');
    add_meta_box('seo-meta-box', __('Mon référencement'), [$this, 'display_form'], 'post', 'normal');
  }

  public function display_form($post)
  {
    $title = get_post_meta($post->ID, 'seo-title', true);

    ?>
    <table class="form-table">
      <tbody>
      <tr>
        <th scope="row"><label for="seo-title">Author</label></th>
        <td><input type="text" id="seo-title" name="seo-title" value="<?= esc_html($title) ?>" class="regular-text">
        </td>
      </tr>
      </tbody>
    </table>
    <?php
  }

  public function save_form($post_id)
  {
    if (!isset($_POST['seo-title'])) {
      return;
    }


    update_post_meta($post_id, 'seo-title', sanitize_text_field($_POST['seo-title']));

  }

  public function title()
  {
    if (is_single() or is_page()) {
      return get_post_meta(get_the_ID(), 'seo-title', true);
    }
  }
  public function desc()
  {
    if (is_single() or is_page()) {
      echo '<meta name="description" content="' . get_post_meta(get_the_ID(), 'seo-desc', true) . '">';
    }
  }

}
