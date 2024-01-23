        <footer class="footer">
            <div class="footer-wrapper">
                <div class="logo-copyright">
                    <a href="<?php echo HOME; ?>">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.svg" alt="">
                    </a>
                    <p class="copyright font-14-400 pc">
                        Copyright © SDGs Management
                    </p>
                </div>
            </div>
            <nav class="footer-nav">
                <ul class="nav-menu">
                    <li>
                        <a href="<?php echo HOME . 'about'; ?>" class="menu-link active">
                            <span>団体概要</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'issues'; ?>" class="menu-link">
                            <span>社会課題</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'activities'; ?>" class="menu-link">
                            <span>活動内容</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'report'; ?>" class="menu-link">
                            <span>活動報告</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'members'; ?>" class="menu-link">
                            <span>メンバー</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'apply'; ?>" class="menu-link">
                            <span>参加案内</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'inquiry'; ?>" class="menu-link">
                            <span>お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="copyright font-14-400 sp">
                Copyright © SDGs Management
            </p>
        </footer>

        <script src="https://kit.fontawesome.com/8cbdf0a85f.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo T_DIRE_URI; ?>/assets/js/common.js"></script>

        <?php wp_footer(); ?>
    </body>

</html>