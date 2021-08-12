<?php
$url_encode = urlencode(get_permalink());
$title_encode = urlencode(get_the_title()) . '｜' . get_bloginfo('name');
?>

<div class="share">
    <ul>
        <!--Facebookボタン-->
        <li class="facebooklink">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                <?php if (wp_is_mobile()) : ?><i class="fa fa-facebook"></i>
                <?php else : ?>
                    <i class="fa fa-facebook"></i><span> facebook</span>
                <?php endif; ?>
            </a>
        </li>

        <!--ツイートボタン-->
        <li class="tweet">
            <a href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                <?php if (wp_is_mobile()) : ?><i class="fa fa-twitter"></i>
                <?php else : ?>
                    <i class="fa fa-twitter"></i><span> tweet</span>
                <?php endif; ?>
            </a>
        </li>

        <!--LINEボタン-->
        <li class="line">
            <a href="//social-plugins.line.me/lineit/share?url=<?php echo $url_encode; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;">
                <span>LINE</span>
            </a>
        </li>

        <!--はてなボタン-->
        <li class="hatena">
            <a href="//b.hatena.ne.jp/entry/<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;">
                <?php if (wp_is_mobile()) : ?><i class="fa fa-hatena"></i>
                <?php else : ?>
                    <i class="fa fa-hatena"></i><span> はてブ</span>
                <?php endif; ?>
            </a>
        </li>
    </ul>
</div>