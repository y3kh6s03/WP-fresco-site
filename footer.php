</div>
</main>

<footer>
    <div class="footer__wrapper">
        <a class="footer__logo" href="<?php echo home_url(); ?>"></a>
        <a href="#hero">
            <div class="return">
                <div class="return__wrapper">
                    <svg class="return__wrapper__inner" viewBox="0 0 100 100">
                        <path id="return__wrapper__inner__path" class="return__wrapper__inner__path" d="M 0 50 A 50 50 0 1 1 0 51 z" />
                        <text class="return__wrapper__inner__text">
                            <textPath href="#return__wrapper__inner__path">
                                Fresco company. Meal for smile.
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </a>

        <nav class="footer">
            <table>
                <tbody>
                    <tr>
                        <th>Tell</th>
                        <td>026-247-8770</td>
                    </tr>
                    <tr>
                        <th>Fax</th>
                        <td>026-247-8771</td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td>info@fresco-c.com</td>
                    </tr>
                </tbody>
            </table>
            <div class="footer__nav">
                <ul class="footer__nav__ul">
                    <li>
                        <a href="<?php echo home_url(); ?>">
                            Home
                            <span>ホーム</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/about">
                            About
                            <span>わたしたちについて</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/future">
                            Future
                            <span>わたしたちの未来</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/service">
                            Service
                            <span>わたしたちの事業</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/works">
                            Works
                            <span>わたしたちの歩み</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://fresco-recruit.vercel.app/" target="_blank">
                            Recruit
                            <span>採用情報</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/contact">
                            Contact
                            <span>お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <small>&copy; 2023 Fresco company .All rights reserved.</small>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>