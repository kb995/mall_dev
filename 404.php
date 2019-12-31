<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        ページが見つかりませんでした | <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?></head>
<body <?php body_class(); ?>>
    <div class="content-404">
        <h1>404 File not found</h1>
        <h2>Webページが見つかりません</h2>

        <h3>■　可能性のある原因</h3>
        <ul>
            <li>・　アドレスに入力の間違いがある可能性がある。</li>
            <li>・　リンクをクリックした場合には、リンクが古い場合があります。</li>
        </ul>
    
        <h3>■　対処方法</h3>
        <ul>
            <li>・　アドレスを再入力する。</li>
            <li>
                <!-- <a href="javascript:history.back();">前のページに戻る。 -->
            </li>
            <li>
                <a href="<?php echo home_url('/'); ?>">・　メインのサイト</a>に移動して必要な情報を探す。
            </li>
        </ul>
    </div>
</body>
</html>