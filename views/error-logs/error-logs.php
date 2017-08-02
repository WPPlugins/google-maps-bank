<?php
/**
 * This Template is used for displaying error logs.
 *
 * @author  Tech Banker
 * @package google-maps-bank/views/error-logs
 * @version 2.0.0
 */
if (!defined("ABSPATH")) {
    exit;
} // Exit if accessed directly
if (!is_user_logged_in()) {
    return;
} else {
    $access_granted = false;
    foreach ($user_role_permission as $permission) {
        if (current_user_can($permission)) {
            $access_granted = true;
            break;
        }
    }
    if (!$access_granted) {
        return;
    } else if (error_logs_google_map == "1") {
        ?>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-custom-home"></i>
                    <a href="admin.php?page=gmb_google_maps">
                        <?php echo $google_maps_bank; ?>
                    </a>
                    <span>></span>
                </li>
                <li>
                    <span>
                        <?php echo $gm_error_logs; ?>
                    </span>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box vivid-green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-custom-shield"></i>
                            <?php echo $gm_error_logs; ?>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form id="ux_frm_error_logs">
                            <div class="form-body">
                                <div class="form-body">
                                    <?php
                                    if ($gm_message_translate_help != "") {
                                        ?>
                                        <div class="note note-danger">
                                            <h4 class="block">
                                                <?php echo $gm_important_disclaimer; ?>
                                            </h4>
                                            <strong><?php echo $gm_message_translate_help; ?><br/><?php echo $gm_kindly_click; ?><a href="javascript:void(0);" data-popup-open="ux_open_popup_translator" class="custom_links" onclick="show_pop_up_google_map();"><?php echo $gm_message_translate_here; ?></a></strong>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <div class="form-actions">
                                        <div class="pull-right">
                                            <a type="button" href="" class="btn vivid-green" name="ux_btn_download_error_logs" id="ux_btn_download_error_logs"><?php echo $gm_error_download; ?></a>
                                            <button type="button" class="btn vivid-green btn_clear_log"  name="ux_btn_report_error_logs"  id="ux_btn_report_error_logs"><?php echo $gm_error_clear; ?></button>
                                        </div>
                                    </div>
                                    <div class="line-separator"></div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            <?php echo $gm_error_output ?> :
                                            <i class="icon-custom-question tooltips" data-original-title="<?php echo $gm_error_logs_tooltip ?>" data-placement="right"></i>
                                        </label>
                                        <textarea rows="25" class="form-control" name="ux_txt_error_logs" id="ux_txt_error_logs" readonly="true"></textarea>
                                    </div>
                                    <div class="line-separator"></div>
                                    <div class="form-actions">
                                        <div class="pull-right">
                                            <a type="button" href="" class="btn vivid-green" name="ux_btn_download_error_logs" id="ux_btn_download_error_logs"><?php echo $gm_error_download; ?></a>
                                            <button type="button" class="btn vivid-green btn_clear_log"  name="ux_btn_report_error_logs"  id="ux_btn_report_error_logs"><?php echo $gm_error_clear; ?></button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-custom-home"></i>
                    <a href="admin.php?page=gmb_google_maps">
                        <?php echo $google_maps_bank; ?>
                    </a>
                    <span>></span>
                </li>
                <li>
                    <span>
                        <?php echo $gm_error_logs; ?>
                    </span>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box vivid-green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-custom-shield"></i>
                            <?php echo $gm_error_logs; ?>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <strong><?php echo $gm_user_access_message; ?></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}