<footer id="footer">
  <!-- <h5>© <?php echo date("Y"); ?> My Blog</h5> -->
   <!-- Modals -->
  <section class="modal" style="display: none" data-modal="modal-1">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'dress-code-bienvenida.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

   <section class="modal" style="display: none" data-modal="modal-2">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'dress-code-despedida.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-3">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'dress-code-wedding.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-4">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'more-info-bienvenida.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-5">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'more-info-gift.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>
</footer>

<!-- wordpress footer includes -->
<?php wp_footer(); ?>