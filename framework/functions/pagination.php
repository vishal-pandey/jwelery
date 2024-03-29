<?php
/*
Generate pagination.
Input :
- int $num_pages_per_phrase : the number of page per group.
No output.
 */
function wdjewelry_get_pagenum_link($pagenum = 1, $escape = true)
{
    global $wp_rewrite;

    $pagenum = (int) $pagenum;

    $request = remove_query_arg('paged');

    $home_root = parse_url(home_url());
    $home_root = (isset($home_root['path'])) ? $home_root['path'] : '';
    $home_root = preg_quote(trailingslashit($home_root), '|');

    $request = preg_replace('|^' . $home_root . '|', '', $request);
    $request = preg_replace('|^/+|', '', $request);

    if (!$wp_rewrite->using_permalinks() || is_admin()) {
        $base = trailingslashit(home_url());

        if ($pagenum > 1) {
            //$result = add_query_arg( 'paged', $pagenum, $base . $request );
            $result = $base . $request;
        } else {
            $result = $base . $request;
        }
    } else {
        $qs_regex = '|\?.*?$|';
        preg_match($qs_regex, $request, $qs_match);

        if (!empty($qs_match[0])) {
            $query_string = $qs_match[0];
            $request = preg_replace($qs_regex, '', $request);
        } else {
            $query_string = '';
        }

        $request = preg_replace("|$wp_rewrite->pagination_base/\d+/?$|", '', $request);
        $request = preg_replace('|^index\.php|', '', $request);
        $request = ltrim($request, '/');

        $base = trailingslashit(home_url());

        if ($wp_rewrite->using_index_permalinks() && ($pagenum > 1 || '' != $request)) {
            $base .= 'index.php/';
        }

        if ($pagenum > 1) {
            $request = ((!empty($request)) ? trailingslashit($request) : $request) . user_trailingslashit($wp_rewrite->pagination_base . "/" . $pagenum, 'paged');
        }

        $result = $base . $request . $query_string;
    }

    $result = apply_filters('get_pagenum_link', $result);

    if ($escape) {
        return esc_url($result);
    } else {
        return esc_url_raw($result);
    }

}

if (!function_exists('wdjewelry_pagination')) {
    function wdjewelry_pagination($num_pages_per_phrase = 3)
    {
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
            return;
        }
        global $wp_query;

        if (!isset($_GET['page'])) {
            $_GET['page'] = 1;
        }

        $page_select = max(1, absint($wp_query->get('paged')));

        if ($wp_query->found_posts > 0):
            $pageLink = wdjewelry_get_pagenum_link($_GET['page']);
            $pageLink = str_replace(array('page=' . $_GET['page'], 'page/' . $_GET['page']), '', $pageLink);
            if (strpos($pageLink, '?') === false) {
                $pageLink .= '?';
            } elseif (strpos($pageLink, '?') >= 0 && strpos($pageLink, '&') === false) {
            $pageLink .= '&';
        }

        //best case
        $paged = $page_select;

        $term = get_query_var('term');
        $tax = get_query_var('taxonomy');
        $max_page = min(array($wp_query->max_num_pages, $num_pages_per_phrase));
        if ($max_page <= 0) {
            $max_page = 1;
        }

        $phrase = ceil($paged / $max_page);
        $start_page = $max_page * ($phrase - 1) + 1;

        ?>
		<div class="wp-pagenavi">
			<span class='curent-total'>Page <?php echo esc_html($paged); ?> of <?php echo esc_html($wp_query->max_num_pages); ?></span>
			<?php
if ($paged > 1) {?>
			<a class="first" href="<?php echo esc_url($pageLink); ?><?php echo '&paged=1'; //first link   ?>"><?php esc_html_e('First', 'wdjewelry')?></a>
			<a class="previous" href="<?php echo esc_url($pageLink); ?><?php echo '&paged=' . esc_attr($paged - 1); //next link   ?>"><?php esc_html_e('Previous', 'wdjewelry')?></a>
			<?php }
        if ($phrase > 1) {?>
					<a class="previous-phrase" href="<?php echo esc_url($pageLink); ?><?php echo '&paged=' . ($max_page * ($phrase - 2) + 1); //prev prase link   ?>">...</a>
			<?php }?>
			<?php
for ($i = 0; $start_page + $i <= min(array($wp_query->max_num_pages, $start_page + $max_page - 1)); $i++) {
            ?>
					<?php if ($paged == $start_page + $i): ?>
					<span class="pager current<?php if ($i == 0) {
                echo ' first-pager';
            }
            if ($start_page + $i == min(array($wp_query->max_num_pages, $start_page + $max_page - 1))) {
                echo ' last-pager';
            }
            ?>"><?php echo esc_html($start_page + $i); ?></span>
					<?php else: ?>
					<a class="pager<?php if ($i == 0) {
                echo ' first-pager';
            }
            if ($start_page + $i == min(array($wp_query->max_num_pages, $start_page + $max_page - 1))) {
                echo ' last-pager';
            }
            ?>" href="<?php echo esc_url($pageLink); ?><?php echo '&paged=' . esc_attr($start_page + $i); ?>"><?php echo esc_html($start_page + $i); ?></a>
					<?php endif;?>
					<?php
}
        if ($phrase < ceil($wp_query->max_num_pages / $max_page)) {?>
					<a class="next-phrase" href="<?php echo esc_url($pageLink); ?><?php echo '&paged=' . esc_attr($max_page * $phrase + 1); //next phrase link   ?>">...</a>
			<?php }?>
			<?php if ($paged < $wp_query->max_num_pages) {?>
					<a class="next" href="<?php echo esc_url($pageLink); ?><?php echo '&paged=' . esc_attr($paged + 1); //next link   ?>"><?php esc_html_e('Next', 'wdjewelry')?></a>
					<a class="last" href="<?php echo esc_url($pageLink); ?><?php echo '&paged=' . esc_attr($wp_query->max_num_pages); //next link   ?>"><?php esc_html_e('Last', 'wdjewelry')?></a>
			<?php }
        endif;
        ?>
		</div>
		<?php
}
}
?>