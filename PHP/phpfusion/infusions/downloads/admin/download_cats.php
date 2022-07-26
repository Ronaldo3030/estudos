<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: download_cats.php
| Author: Frederick MC Chan (Chan)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale = fusion_get_locale();
pageaccess('D');
if ((isset($_GET['action']) && $_GET['action'] == "delete") && (isset($_GET['cat_id']) && isnum($_GET['cat_id']))) {
    if (dbcount("(download_cat)", DB_DOWNLOADS, "download_cat='".intval($_GET['cat_id'])."'")
        || dbcount("(download_cat_id)", DB_DOWNLOAD_CATS, "download_cat_parent='".intval($_GET['cat_id'])."'")
    ) {
        addnotice("danger", $locale['download_0152']." - ".$locale['download_0153']);
    } else {
        addnotice("success", $locale['download_0154']);
        $result = dbquery("DELETE FROM ".DB_DOWNLOAD_CATS." WHERE download_cat_id='".intval($_GET['cat_id'])."'");
    }
    redirect(clean_request("cat_view=1", ["section", "aid"]));
} else {
    $data = [
        "download_cat_id"          => 0,
        "download_cat_parent"      => 0,
        "download_cat_hidden"      => [],
        "download_cat_name"        => "",
        "download_cat_description" => "",
        "download_cat_language"    => LANGUAGE,
        "download_cat_sort_by"     => "",
        "download_cat_sort_order"  => "ASC",
    ];
    if (isset($_POST['save_cat'])) {
        $data = [
            "download_cat_id"          => form_sanitizer($_POST['download_cat_id'], 0, "download_cat_id"),
            "download_cat_parent"      => form_sanitizer($_POST['download_cat_parent'], 0, "download_cat_parent"),
            "download_cat_hidden"      => [],
            "download_cat_name"        => form_sanitizer($_POST['download_cat_name'], "", "download_cat_name"),
            "download_cat_description" => form_sanitizer($_POST['download_cat_description'], "", "download_cat_description"),
            "download_cat_language"    => form_sanitizer($_POST['download_cat_language'], LANGUAGE, "download_cat_language"),
            "download_cat_sort_by"     => form_sanitizer($_POST['download_cat_sort_by'], "", "download_cat_sort_by"),
            "download_cat_sort_order"  => form_sanitizer($_POST['download_cat_sort_order'], "DESC", "download_cat_sort_order"),
        ];
        switch ($data['download_cat_sort_by']) {
            case 1:
                $data['download_cat_sorting'] = "download_id ".($data['download_cat_sort_order'] == "ASC" ? "ASC" : "DESC");
                break;
            case 2:
                $data['download_cat_sorting'] = "download_title ".($_POST['download_cat_sort_order'] == "ASC" ? "ASC" : "DESC");
                break;
            case 3:
                $data['download_cat_sorting'] = "download_datestamp ".($_POST['download_cat_sort_order'] == "ASC" ? "ASC" : "DESC");
                break;
            default:
                $data['download_cat_sorting'] = "download_title ASC";
        }
        // Category Name Check
        $categoryNameCheck = [
            "when_updating" => "download_cat_name='".$data['download_cat_name']."' and download_cat_id !='".$data['download_cat_id']."'",
            "when_saving"   => "download_cat_name='".$data['download_cat_name']."'",
        ];
        if (fusion_safe()) {
            if (dbcount("(download_cat_id)", DB_DOWNLOAD_CATS, "download_cat_id='".$data['download_cat_id']."'")) {
                if (!dbcount("(download_cat_id)", DB_DOWNLOAD_CATS, $categoryNameCheck['when_updating'])) {
                    dbquery_insert(DB_DOWNLOAD_CATS, $data, "update");
                    addnotice("success", $locale['download_0151']);
                    redirect(clean_request("cat_view=1", ["section", "aid"]));
                } else {
                    fusion_stop();
                    addnotice("danger", $locale['download_0352']);
                }
            } else {
                if (!dbcount("(download_cat_id)", DB_DOWNLOAD_CATS, $categoryNameCheck['when_saving'])) {
                    dbquery_insert(DB_DOWNLOAD_CATS, $data, "save");
                    addnotice("success", $locale['download_0150']);
                    redirect(clean_request("cat_view=1", ["section", "aid"]));
                } else {
                    fusion_stop();
                    addnotice("danger", $locale['download_0352']);
                }
            }
        }
    }
    if ((isset($_GET['action']) && $_GET['action'] == "edit") && (isset($_GET['cat_id']) && isnum($_GET['cat_id']))) {
        $result = dbquery("SELECT * FROM ".DB_DOWNLOAD_CATS." ".(multilang_table("DL") ? "WHERE ".in_group('download_cat_language', LANGUAGE)." AND" : "WHERE")." download_cat_id='".$_GET['cat_id']."'");
        if (dbrows($result)) {
            $data = dbarray($result);
            $data['download_cat_hidden'] = [$data['download_cat_id']];
            $cat_sorting = explode(" ", $data['download_cat_sorting']);
            $data['download_cat_sort_by'] = "";
            if ($cat_sorting[0] == "download_id") {
                $data['download_cat_sort_by'] = "1";
            } else if ($cat_sorting[0] == "download_title") {
                $data['download_cat_sort_by'] = "2";
            } else if ($cat_sorting[0] == "download_datestamp") {
                $data['download_cat_sort_by'] = "3";
            }
            $data['download_cat_sort_order'] = $cat_sorting[1];
        } else {
            redirect(clean_request("", ["section", "aid"]));
        }
    }
    $tab_cats['title'][] = $locale['download_0023'];
    $tab_cats['id'][] = "dlcats_form";
    $tab_cats['icon'][] = "";
    $tab_cats['title'][] = $locale['download_0020'];
    $tab_cats['id'][] = "dlcats";
    $tab_cats['icon'][] = "";
    $tab_cats_active = tab_active($tab_cats, isset($_GET['cat_view']) ? 1 : 0);

    echo opentab($tab_cats, $tab_cats_active, 'dcategory', FALSE, "nav-tabs");
    echo opentabbody($tab_cats['title'][0], $tab_cats['id'][0], $tab_cats_active);
    echo openform('addcat', 'post', FUSION_REQUEST, ['class' => 'm-t-20']);
    echo "<div class='row'>\n";
    echo "<div class='col-xs-12 col-sm-8'>\n";
    openside('');
    echo form_hidden("download_cat_id", "", $data['download_cat_id']);
    echo form_text('download_cat_name', $locale['download_0300'], $data['download_cat_name'], [
        'required'   => TRUE,
        'error_text' => $locale['download_0351']
    ]);
    echo form_textarea('download_cat_description', $locale['download_0301'], $data['download_cat_description'], [
        'resize'   => 0,
        'autosize' => TRUE,
    ]);

    echo '<div class="row">';
    echo '<div class="col-xs-12 col-sm-3">';
    echo $locale['download_0302'];
    echo '</div>';
    echo '<div class="col-xs-12 col-sm-3">';
    echo form_select('download_cat_sort_by', '', $data['download_cat_sort_by'], [
        'options'     => [
            '1' => $locale['download_0303'],
            '2' => $locale['download_0200'],
            '3' => $locale['download_0305']
        ],
        'class'       => 'pull-left',
        'inner_width' => '200px',
        'inline'      => TRUE
    ]);
    echo '</div><div class="col-xs-12 col-sm-3">';
    echo form_select('download_cat_sort_order', '', $data['download_cat_sort_order'], [
        'options'     => ['ASC' => $locale['download_0306'], 'DESC' => $locale['download_0307']],
        'inner_width' => '200px',
        'inline'      => TRUE
    ]);
    echo '</div>';
    echo '</div>';

    closeside();
    echo "</div>\n<div class='col-xs-12 col-sm-4'>\n";
    openside('');
    echo form_select_tree("download_cat_parent", $locale['download_0308'], $data['download_cat_parent'], [
        "disable_opts"  => $data['download_cat_hidden'],
        "hide_disabled" => TRUE,
        'width'         => '100%'
    ], DB_DOWNLOAD_CATS, "download_cat_name", "download_cat_id", "download_cat_parent");
    if (multilang_table("DL")) {
        echo form_select('download_cat_language[]', $locale['global_ML100'], $data['download_cat_language'], [
            'options'     => fusion_get_enabled_languages(),
            'placeholder' => $locale['choose'],
            'width'       => '100%',
            'multiple'    => TRUE
        ]);
    } else {
        echo form_hidden('download_cat_language', '', $data['download_cat_language']);
    }
    closeside();
    echo "</div>\n</div>\n";
    echo form_button('save_cat', $locale['download_0309'], $locale['download_0309'], ['class' => 'btn-success', 'icon' => 'fa fa-hdd-o']);
    echo closeform();
    echo closetabbody();
    echo opentabbody($tab_cats['title'][1], $tab_cats['id'][1], $tab_cats_active);
    $row_num = 0;
    echo "<div class='row m-t-15'>";
    showcatlist();
    echo "</div>";
    if ($row_num == 0) {
        echo "<div class='well text-center'>".$locale['download_0251']."</div>\n";
    }
    echo closetabbody();
    echo closetab();
}
/**
 * display download category container
 *
 * @param int $parent
 * @param int $level
 */
function showcatlist($parent = 0, $level = 0) {
    global $row_num;
    $locale = fusion_get_locale();

    $result = dbquery("
    SELECT d.download_cat_id, d.download_cat_name, d.download_cat_description,
    count(dl.download_id) 'download_count',
    dc.download_cat_id 'child_categories'
    from ".DB_DOWNLOAD_CATS." d
    left join ".DB_DOWNLOAD_CATS." dc on dc.download_cat_parent=d.download_cat_id
    left join ".DB_DOWNLOADS." dl on dl.download_cat=d.download_cat_id
    WHERE d.download_cat_parent='$parent' ".(multilang_table("DL") ? "and ".in_group('d.download_cat_language', LANGUAGE) : "")."
    group by d.download_cat_id
    ORDER BY d.download_cat_name
    ");
    if (dbrows($result) != 0) {
        while ($data = dbarray($result)) {
            echo "<div class='col-xs-12 col-sm-6'>";
            echo "<div class='well clearfix'>\n";
            echo "<div class='btn-group pull-right m-t-5'>\n";
            echo "<a class='btn btn-sm btn-default' href='".clean_request("action=edit&cat_id=".$data['download_cat_id'], ["section", "aid"])."'>".$locale['edit']."</a>";
            echo "<a class='btn btn-sm btn-danger ".($data['download_count'] || $data['child_categories'] ? "disabled" : "")."' href='".clean_request("action=delete&cat_id=".$data['download_cat_id'], ["section", "aid"])."' onclick=\"return confirm('".$locale['download_0350']."');\"><i class='fa fa-trash fa-fw'></i> ".$locale['delete']."</a>\n";
            echo "</div>\n";
            echo "<div class='overflow-hide p-r-10'>\n";
            echo "<span class='display-inline-block m-r-10 strong text-bigger'>".str_repeat("&mdash;", $level).$data['download_cat_name']."</span>";
            if ($data['download_cat_description']) {
                echo "<br />".str_repeat("&mdash;", $level)."<span class='small'>".fusion_first_words($data['download_cat_description'], 50)."</span>";
            }
            echo "</div>\n";
            echo "</div>\n";
            echo "</div>";
            $row_num++;
            showcatlist($data['download_cat_id'], $level + 1);
        }
    }
}
