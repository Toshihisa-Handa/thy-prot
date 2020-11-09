#使用タグの説明
```<?php get_template_part('parts/head'); ?>```
partsフォルダ内の指定ファイルを読み込んでいる。
読み込みの際、拡張子（.php）は不要
<!-- ばばメモ -->
パーマリンクの設定変更「設定」→パーマリンク→日付と投稿名
固定ページは、カスタムテンプレートを充てる

*使用プラグインプラグイン*
--記事装飾用エディター---
Advanced Editor Tools (previously TinyMCE Advanced)


page-bloglist.phpのページネーションの参考記事
・https://note.com/tenlife/n/nfcf4c91f9e88
・https://note.spiqa.design/84/

index.phpやsingle.phpでない固定ページでは基本のページネーションの関数
```<?php echo paginate_links(); ?>```は使用できなかった為、
上記URLを参考にし実装した。
