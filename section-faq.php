<section class="section-faq" id="faq">
    <div class="container">
        <span class="section-title" data-txt="FAQ"><span class="azure"><?php the_field('faq_title') ?></span></span>
        <ul class="faq-list">
           <?php 
                $questions = get_field('faq_list');
                if($questions){
                    foreach($questions as $question){ ?>
                        <li>
                            <div class="faq-header icon-right-arrow"><?php echo $question['faq_question'] ?></div>
                            <div class="faq-body"><?php echo $question['faq_answer'] ?></div>
                        </li>
            <?php
                    }
                }
            ?>             
        </ul>
    </div>
</section>