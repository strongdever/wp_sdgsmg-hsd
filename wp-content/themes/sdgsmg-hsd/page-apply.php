<?php

/*
   Template Name: Apply Template
*/

if (!defined('ABSPATH'))
    exit;
get_header();

?>

    <main class="apply-page">
        <div class="subpage-firstview">
            <div class="page-label">
                <div class="container">
                    <h2 class="eng font-20-800">Apply</h2>
                    <h1 class="head-text font-40-600">参加案内</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="top-desc font-18-500">
                健康投資推進協議会では、「参加企業」及び「賛助企業」を募集しております。<br>
                ご質問や参加をご希望の方は、お問い合わせフォームよりご連絡ください。
            </div>
            <a class="href-left" href="<?php echo HOME . 'inquiry'; ?>">
                <div class="svg-wrapper">
                    <div class="circle"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path
                            d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                            fill="white" />
                    </svg>
                </div>
                <span class="font-18-600">お問い合わせはこちら</span>
            </a>

            <div class="section1">
                <div class="green-title font-24-600">
                    参加企業におけるメリット
                </div>
                <div class="spot-title with-desc font-18-600">健康投資推進協議会ワーキンググループ（HSD研究会）月1回の開催へのご参加</div>
                <div class="sub-desc font-16-500">
                    ・ 経営者および担当者が、社会的視座を学ぶことができます。<br>
                    ・ 経営者および担当者が、健康投資やHSDの概念に関する学びを得られます。
                </div>
                <div class="spot-title font-18-600">自社健康投資における事例について有識者の助言をもらいながら、資料作成・発表が出来るようになる</div>
                <div class="spot-title font-18-600">他社事例について学び、自社の取組みに反映できる</div>
                <div class="spot-title font-18-600">健康投資シンポジウムにて、自社事例を発表できる（選抜方式）</div>
                <div class="spot-title doing-ready font-18-600">自社HPにHSDバナーを掲載できる</div>
                <div class="spot-title doing-ready last-one font-18-600">SDGsプラットフォームHP内の健康投資推進協議会ページでの自社バナー掲載</div>

                <div class="green-title font-24-600">
                    賛助企業におけるメリット
                </div>
                <div class="spot-title font-18-600">健康投資推進協議会 ワーキンググループ（HSD研究会）月1回の開催へのオブザーブ参加</div>
                <div class="spot-title font-18-600">健康投資シンポジウムでのオンラインおよび現地における広告記載</div>
                <div class="spot-title font-18-600">健康投資推進協議会内における協議会メンバーとの連携・相談</div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>