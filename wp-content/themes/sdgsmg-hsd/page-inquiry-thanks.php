<?php

/*
   Template Name: Inquiry thanks Template
*/

if (!defined('ABSPATH'))
    exit;
get_header();

?>

<main id="thanks-page" class="inquiry">
    <div class="sub-mainview">
        <div class="container">
            <p class="head-text font-24-700">お問い合わせが完了しました</p>
            <p class="description font-18-500">
                この度はお問い合わせいただきまして誠にありがとうございます。<br>
                ご入力頂いたメールアドレス宛へ、ご確認メールをお送りしておりますのでご確認ください。
            </p>
            <a class="href-left" href="<?php echo HOME; ?>">
                <div class="svg-wrapper">
                    <div class="circle"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path
                            d="M1.96937 8.53073L6.46937 13.0307C6.61027 13.1716 6.80137 13.2508 7.00062 13.2508C7.19988 13.2508 7.39098 13.1716 7.53187 13.0307C7.67277 12.8898 7.75193 12.6987 7.75193 12.4995C7.75193 12.3002 7.67277 12.1091 7.53187 11.9682L4.3125 8.75011H13.5C13.6989 8.75011 13.8897 8.67109 14.0303 8.53044C14.171 8.38979 14.25 8.19902 14.25 8.00011C14.25 7.8012 14.171 7.61043 14.0303 7.46978C13.8897 7.32913 13.6989 7.25011 13.5 7.25011H4.3125L7.53063 4.03011C7.67152 3.88921 7.75068 3.69812 7.75068 3.49886C7.75068 3.2996 7.67152 3.10851 7.53063 2.96761C7.38973 2.82671 7.19863 2.74756 6.99938 2.74756C6.80012 2.74756 6.60902 2.82671 6.46813 2.96761L1.96813 7.46761C1.89819 7.53738 1.84273 7.62028 1.80493 7.71155C1.76713 7.80281 1.74773 7.90065 1.74784 7.99943C1.74796 8.09822 1.76759 8.19601 1.80561 8.28718C1.84363 8.37836 1.89928 8.46113 1.96937 8.53073Z"
                            fill="white" />
                    </svg>
                </div>
                <span class="font-18-700">トップページに戻る</span>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>