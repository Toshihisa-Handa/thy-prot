        <!-- フッター -->
        <div id='footer' class="footer">
    <div class="contents-footer">
         <div class="footerLeft">
             <div class="footerLogo">
             <img class='logo-img' src="<?php echo get_template_directory_uri(); ?>/img/logo_02_w.png"  alt="">
             </div>
             <div class="footer-navBox">
             <nav class="footer-nav">
                <?php wp_nav_menu(array(
                    'theme_location'=>'place_footer',
                    'container'=>'false',
                    'container_class'=>'fnav',
                    'container_id'=>'fnav'
                )); ?>
                </nav>

                 <!-- <ul class="footer-nav">
                     <li class='fnav'><a  class='flink' href="#" class='font-14'>会社概要</a></li>
                     <li class='fnav'><a  class='flink' href="#" class='font-14'>所有物件</a></li>
                     <li class='fnav'><a  class='flink' href="#" class='font-14'>ブログ</a></li>
                     <li class='fnav'><a  class='flink' href="#" class='font-14'>問い合わせ</a></li>
                     <li class='fnav'><a  class='flink' href="#" class='font-14'>プライバシーポリシー</a></li>
                 </ul> -->
                 <div class="footer-icon">
                     <div class="logos " ><a href="#" class='flink font-32'><span class="fab fa-facebook-square blue fa-fw"></span></a></div>
                     <div class="logos " ><a href="#" class='flink font-32'><span class="fab fa-twitter-square aqua fa-fw"></span></a></div>
                 </div>
              </div>
         </div>
         <div class="footerRight">
         <iframe class='map' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1623.438271264117!2d139.4931890991747!3d35.532048438811906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f850ed7f1c8b%3A0x5e5675d0d7f58ec5!2z6ZW35rSl55Sw6aeF!5e0!3m2!1sja!2sjp!4v1604885354990!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
         </div>
     </div>
 </div>
 
  <div class="copyright">
         <div class="copyrightText font-14">Copyright <?php echo date('Y') ?> THY inc. All Rights Reserved.</div>
   </div>

    <!-- フッターここまで -->
    </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
    <?php wp_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>