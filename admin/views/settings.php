<div class="wrap">

  <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

  <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">

    <div id="universal-message-container">
      <h2>Taxa de conversão do dólar</h2>

      <div class="options">
        <p>
          <label>Qual a taxa de conversão do dólar que deseja utilizar?</label>
          <br />
          <input type="text" name="acme-message" value="<?php echo esc_attr( $this->deserializer->get_value( 'usd-custom-data' ) ); ?>" />
          <p class="description" id="tagline-description">Exemplo: 5.22 . (não inserir simbolos monetários. Apenas números e ponto.)</p>
        </p>
      </div><!-- #universal-message-container -->

      <?php
      wp_nonce_field( 'acme-settings-save', 'acme-custom-message' );
      submit_button();
      ?>
  </form>

</div><!-- .wrap -->