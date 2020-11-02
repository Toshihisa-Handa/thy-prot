<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<?php get_template_part('parts/head'); ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>
    <div class="container">
    <!-- ヘッダー -->
    <?php get_template_part('parts/header'); ?>
    <!-- ヘッダーここまで -->
    <!-- ヘッダールート -->
    <div class="headerRoute"></div>
    <!-- ヘッダールートここまで -->




    <!-- プライバシーポリシー -->
    <div class="company">   
        <h1>Company<img src="<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg"></h1>
            <table class="company_tb">
                <tbody>
                    <tr>
                        <th>会社概要</th>
                        <td>合同会社 THY</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>2014年11月</td>
                    </tr>
                    <tr>
                        <th>代表社員</th>
                        <td>Baba Takeshi</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>500万円</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>神奈川県横浜市緑区長津田4-15-18</td>
                    </tr>
                </tbody>
            </table>
    </div>


    
    <!-- プライバシーポリシー　ここまで -->

    
    <!-- フッター -->
    <div class="footer">
        <?php get_template_part('parts/footer'); ?>
    </div>
    <?php wp_footer(); ?>
    <!-- フッターここまで -->
    </div>
</body>
</html>