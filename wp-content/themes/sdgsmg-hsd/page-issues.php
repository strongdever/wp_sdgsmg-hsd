<?php

/*
   Template Name: Social Issues Template
*/

if (!defined('ABSPATH'))
    exit;
get_header();

?>

    <main class="issues-page">
        <div class="subpage-firstview">
            <div class="page-label">
                <div class="container">
                    <h2 class="eng font-20-800">Social Issues</h2>
                    <h1 class="head-text font-40-600">社会課題</h1>
                    <p class="desc font-18-500">
                        日本は高齢化率という65歳以上の人口比率が、2023年の段階で過去最高の29.1％で、世界のトップです。<br>
                        この人口構造の変化に対応するための健康寿命の増大は、国の最重要課題です。
                    </p>
                </div>
            </div>
        </div>

        <div class="about-population">
            <div class="container">
                <h2 class="top-title font-24-600">人口構造の変化について</h2>
                <h3 class="sub-title font-32-600">全人口に占める65歳以上の人口比率</h3>
                <div class="img-wrapper">
                    <img class="graph-1 first-ranking" src="<?php echo T_DIRE_URI; ?>/assets/img/graph_1.svg">
                </div>
                <h3 class="sub-title font-32-600">50歳以上の人口比率</h3>
                <div class="img-wrapper aged-fifty">
                    <img class="graph-2" src="<?php echo T_DIRE_URI; ?>/assets/img/graph_2.svg">
                </div>
                <div class="notice font-16-500">
                    参考 ： <a class="green-color font-16-600" href="https://www.meti.go.jp/policy/mono_info_service/healthcare/downloadfiles/kenkokeiei_gaiyo.pdf" target="_blank">健康経営の推進について 令和4年6月 経済産業省 ヘルスケア産業課</a>
                </div>
            </div>
        </div>

        <div class="society-issues">
            <div class="container">
                <div class="issues">
                    <h2 class="top-title font-24-600">国と企業が抱える社会課題</h2>
                    <ul class="country-company">
                        <li class="country">
                            <div class="label font-24-600">国</div>
                            <div class="content">
                                <p class="font-24-600">
                                    少子高齢化による若い労働力の減少<br>
                                    医療費・介護費用の増大
                                </p>
                            </div>
                        </li>
                        <li class="company">
                            <div class="label font-24-600">企業</div>
                            <div class="content">
                                <p class="font-24-600">
                                    定年延長による人材の高齢化<br>
                                    傷病リスクによる労働力の減少
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="coporate-efforts">
                    <h2 class="top-title font-24-600">持続可能な社会の実現に向けた企業の取り組み</h2>
                    <p class="spot-title font-28-600 underline-text">
                        健康寿命を延ばし、労働人材を確保する
                    </p>
                    <p class="spot-title font-28-600 underline-text">
                        社員への健康投資で、長期休養・欠勤のリスクを減らす
                    </p>
                    <img class="three-triangle" src="<?php echo T_DIRE_URI; ?>/assets/img/three-triangle.svg">
                    <div class="rect-content">
                        <h1 class="title font-40-600">持続可能な長寿社会の実現</h1>
                        <p class="hsd font-28-800 eng">
                            <span class="font-32-800">H</span>ealthcare for <span class="font-32-800">S</span>ustainable
                            <span class="font-32-800">D</span>evelopment<span class="font-32-800">（＝HSD）</span>
                        </p>
                        <p class="desc font-20-600">
                            企業は、超高齢化社会という社会課題の解決と、<br>
                            働く人が生涯活躍するするための基盤構築に取り組む必要がある
                        </p>
                        <a class="href-left" href="<?php echo HOME . 'activities'; ?>">
                            <div class="svg-wrapper">
                                <div class="circle"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <span class="font-18-600">活動内容</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>