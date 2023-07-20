<!-- Careers form secton -->
<section class="vetera-career-details-form">
    <!-- Careers form secton form -->
    <div class="vetera-career-details-form__form pb-100">
        <?php 
             $careers_form = get_field('careers_form_shortcode', 'option');
             echo do_shortcode($careers_form); 
        ?>
    </div>
    <!-- ./Careers form secton form  -->
</section>
<!-- ./Careers form secton -->