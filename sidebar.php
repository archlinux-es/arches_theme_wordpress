<div id="content-right">

    <div id="pkgsearch" class="widget">
        <form id="pkgsearch-form" method="get" action="https://www.archlinux.org/packages/">
            <fieldset>
                <label for="pkgsearch-field">Buscar un paquete:</label>
                <input id="pkgsearch-field" type="text" value="" name="q" id="q" size="20" maxlength="200" />
            </fieldset>
        </form>
    </div> <!-- #pkgsearch -->

    <div id="pkgsearch" class="widget">

<a class="synved-social-button synved-social-button-follow synved-social-size-24 synved-social-resolution-single synved-social-provider-facebook nolightbox" data-provider="facebook" target="_blank" rel="nofollow" title="Unite en Facebook" href="https://www.facebook.com/pages/Arch-Linux-Hispano/163041013798520" style="font-size: 0px; width:24px;height:24px;margin:0;margin-bottom:5px;margin-right:5px;">
<img class="synved-share-image synved-social-image synved-social-image-follow" alt="Facebook" title="Unite en Facebook" style="display: inline; width:24px;height:24px; margin: 0; padding: 0; border: none; box-shadow: none;" src="https://www.archlinux-es.org/wp-content/plugins/social-media-feather/synved-social/image/social/regular/48x48/facebook.png" width="24" height="24">
</a>
<a class="synved-social-button synved-social-button-follow synved-social-size-24 synved-social-resolution-single synved-social-provider-twitter nolightbox" data-provider="twitter" target="_blank" rel="nofollow" title="Unite en Twitter" href="https://www.twitter.com/archlinuxes" style="font-size: 0px; width:24px;height:24px;margin:0;margin-bottom:5px;margin-right:5px;">
<img class="synved-share-image synved-social-image synved-social-image-follow" alt="twitter" title="Unite en Twitter" style="display: inline; width:24px;height:24px; margin: 0; padding: 0; border: none; box-shadow: none;" src="https://www.archlinux-es.org/wp-content/plugins/social-media-feather/synved-social/image/social/regular/48x48/twitter.png" width="24" height="24">
</a>
<a class="synved-social-button synved-social-button-follow synved-social-size-24 synved-social-resolution-single synved-social-provider-google_plus nolightbox" data-provider="google_plus" target="_blank" rel="nofollow" title="Unite en Google+" href="https://plus.google.com/u/0/communities/110868507697312685836" style="font-size: 0px; width:24px;height:24px;margin:0;margin-bottom:5px;margin-right:5px;">
<img class="synved-share-image synved-social-image synved-social-image-follow" alt="google_plus" title="Unite en Google+" style="display: inline; width:24px;height:24px; margin: 0; padding: 0; border: none; box-shadow: none;" src="https://www.archlinux-es.org/wp-content/plugins/social-media-feather/synved-social/image/social/regular/48x48/google_plus.png" width="24" height="24">
</a>



    </div> <!-- #pkgsearch -->




    <div class="updates">
    <?php foreach (get_feeds() as $feed): ?>
        <div id="pkg-updates" class="widget box">
            <h3><?php echo $feed->title; ?> <span class="more">(<a href="<?php echo $feed->more ?>" title="<?php echo $feed->more_title; ?>">plus</a>)</span></h3>
            <a href="<?php echo $feed->url; ?>" title="<?php echo $feed->title ?>"
      class="rss-icon"><img src="<?php echo bloginfo('url'); ?>/wp-includes/images/rss.png" alt="RSS Feed" /></a>


	    <table>
            <?php if (empty($feed->items)): ?>
                <tr><td colspan="2">Entradas.</td></tr>
            <?php else: ?>
                <?php foreach ($feed->items as $item): ?>
                <tr>
                    <td class="pkg-name">
                        <span class="<?php echo $item->repo; ?>"><?php echo $item->pkg; ?></span>
                    </td>
                    <td class="pkg-arch">
                        <?php foreach ($item->arch as $arch => $link): ?>
                            <a href="<?php echo $link; ?>"><?php echo $arch; ?></a>
                            <?php if ($link != end($item->arch)): ?>/<?php endif; ?>
                        <?php endforeach; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </table>
        </div> <!-- #pkg-updates -->
    <?php endforeach; ?>
    </div>

    <div id="nav-sidebar" class="widget">
    <?php 
//        setup_postdata(get_post(125)); // Links
//        the_content();
    ?>
    </div> 
<!-- #sidebar -->

</div> <!-- #content-right -->
