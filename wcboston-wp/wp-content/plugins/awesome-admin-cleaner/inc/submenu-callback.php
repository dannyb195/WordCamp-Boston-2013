<div class="aac-wrap">
  <h2>Admin Cleaner Options</h2>
  <small>Cleaning up the WordPress backend one item at a time since 2013<br />
  Click on a heading to show its' options<br />
  Options must be saved after initial install to take effect</small>
  <form method="post" action="options.php">
    <?php settings_fields('gaia_sab_options'); ?>
    <?php $gaia_sab_options = get_option('gaia_sab_options'); ?>
    <table>
      <tr>
        <th>All users below this level will be effected</th>
        <td><select name="gaia_sab_options[level]">
            <?php $gaia_level = $gaia_sab_options['level'];?>
            <option value="administrator" <?php if ($gaia_level == 'administrator') { echo 'selected="selected"'; } ?>>administrator</option>
            <option value="editor" <?php if ($gaia_level =='editor') { echo 'selected="selected"'; } ?>>editor</option>
            <option value="author" <?php if ($gaia_level =='author') { echo 'selected="selected"'; } ?>>author</option>
            <option value="contributor" <?php if ($gaia_level =='contributor') { echo 'selected="selected"'; } ?>>contributor</option>
            <option value="subscriber" <?php if ($gaia_level =='subscriber') { echo 'selected="selected"'; } ?>>subscriber</option>
          </select>
          <?php echo 'Currently selected level is: ' . $gaia_level; ?>
        </td>
      </tr>
      <tr>
        <th>Give Editors Access to the 'Appearance' Menu?</th>
        <td><select name="gaia_sab_options[editor]">
            <?php $gaia_editor = $gaia_sab_options['editor'];?>
            <option value="no" <?php if ($gaia_editor == 'no') { echo 'selected="selected"'; } ?>>No</option>
            <option value="yes" <?php if ($gaia_editor =='yes') { echo 'selected="selected"'; } ?>>Yes</option>
          </select>
          <?php echo 'Currently selection is: ' . $gaia_editor; ?>
        </td>
      </tr>
    </table>
    <h2 class="form-table-dashboard gaiasab">Dashboard</h2>
    <table class="form-table-dashboard gaiasab">
      <tr valign="top">
        <th scope="row">QuickPress</th>
        <td><select name="gaia_sab_options[quick]">
            <?php $gaia_quick = $gaia_sab_options['quick'];?>
            <option value="show" <?php if ($gaia_quick == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_quick =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Incoming Links</th>
        <td><select name="gaia_sab_options[links]">
            <?php $gaia_links = $gaia_sab_options['links'];?>
            <option value="show" <?php if ($gaia_links == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_links =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Right Now</th>
        <td><select name="gaia_sab_options[now]">
            <?php $gaia_now = $gaia_sab_options['now'];?>
            <option value="show" <?php if ($gaia_now == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_now =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Plugins</th>
        <td><select name="gaia_sab_options[plug]">
            <?php $gaia_plug = $gaia_sab_options['plug'];?>
            <option value="show" <?php if ($gaia_plug == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_plug =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Recent Drafts</th>
        <td><select name="gaia_sab_options[drafts]">
            <?php $gaia_drafts = $gaia_sab_options['drafts'];?>
            <option value="show" <?php if ($gaia_drafts == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_drafts =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Recent Comments</th>
        <td><select name="gaia_sab_options[comments]">
            <?php $gaia_comments = $gaia_sab_options['comments'];?>
            <option value="show" <?php if ($gaia_comments == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_comments =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Wordpress Blog</th>
        <td><select name="gaia_sab_options[blog]">
            <?php $gaia_blog = $gaia_sab_options['blog'];?>
            <option value="show" <?php if ($gaia_blog == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_blog =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Other News</th>
        <td><select name="gaia_sab_options[secondary]">
            <?php $gaia_secondary = $gaia_sab_options['secondary'];?>
            <option value="show" <?php if ($gaia_secondary == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_secondary =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
    </table>
    <h2 class="form-table-pages gaiasab">Admin Menu</h2>
    <table class="form-table-pages gaiasab">
      <tr valign="top">
        <th scope="row">Dashboard</th>
        <td><select name="gaia_sab_options[index]">
            <?php $gaia_index = $gaia_sab_options['index'];?>
            <option value="show" <?php if ($gaia_index == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_index =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Comments</th>
        <td><select name="gaia_sab_options[comments_menu]">
            <?php $gaia_comments_menu = $gaia_sab_options['comments_menu'];?>
            <option value="show" <?php if ($gaia_comments_menu == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_comments_menu =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Links</th>
        <td><select name="gaia_sab_options[link_man]">
            <?php $gaia_link_man = $gaia_sab_options['link_man'];?>
            <option value="show" <?php if ($gaia_link_man == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_link_man =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Appearance > Themes</th>
        <td><select name="gaia_sab_options[themes]">
            <?php $gaia_themes = $gaia_sab_options['themes'];?>
            <option value="show" <?php if ($gaia_themes == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_themes =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Appearance > Menus</th>
        <td><select name="gaia_sab_options[nav_menu]">
            <?php $gaia_nav_menus = $gaia_sab_options['nav_menu'];?>
            <option value="show" <?php if ($gaia_nav_menus == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_nav_menus =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Plugins</th>
        <td><select name="gaia_sab_options[plugins]">
            <?php $gaia_plugins = $gaia_sab_options['plugins'];?>
            <option value="show" <?php if ($gaia_plugins == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_plugins =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Users</th>
        <td><select name="gaia_sab_options[users]">
            <?php $gaia_users = $gaia_sab_options['users'];?>
            <option value="show" <?php if ($gaia_users == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_users =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Tools</th>
        <td><select name="gaia_sab_options[tools]">
            <?php $gaia_tools = $gaia_sab_options['tools'];?>
            <option value="show" <?php if ($gaia_tools == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_tools =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
    </table>
    <h2 class="form-table-widgets gaiasab">Core Widgets</h2>
    <table class="form-table-widgets gaiasab">
      <tr valign="top">
        <th scope="row">Calendar</th>
        <td><select name="gaia_sab_options[calendar]">
            <?php $gaia_calendar = $gaia_sab_options['calendar'];?>
            <option value="show" <?php if ($gaia_calendar == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_calendar =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Pages</th>
        <td><select name="gaia_sab_options[pages]">
            <?php $gaia_pages = $gaia_sab_options['pages'];?>
            <option value="show" <?php if ($gaia_pages == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_pages =='hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Archives</th>
        <td><select name="gaia_sab_options[archives]">
            <?php $gaia_archives = $gaia_sab_options['archives'];?>
            <option value="show" <?php if ($gaia_archives == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_archives == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Links</th>
        <td><select name="gaia_sab_options[links_wid]">
            <?php $gaia_links_wid = $gaia_sab_options['links_wid'];?>
            <option value="show" <?php if ($gaia_links_wid == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_links_wid == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Meta</th>
        <td><select name="gaia_sab_options[meta]">
            <?php $gaia_meta = $gaia_sab_options['meta'];?>
            <option value="show" <?php if ($gaia_meta == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_meta == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Search</th>
        <td><select name="gaia_sab_options[search]">
            <?php $gaia_search = $gaia_sab_options['search'];?>
            <option value="show" <?php if ($gaia_search == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_search == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Categories</th>
        <td><select name="gaia_sab_options[categories]">
            <?php $gaia_categories = $gaia_sab_options['categories'];?>
            <option value="show" <?php if ($gaia_categories == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_categories == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Recent Post</th>
        <td><select name="gaia_sab_options[recent_posts]">
            <?php $gaia_recent_posts = $gaia_sab_options['recent_posts'];?>
            <option value="show" <?php if ($gaia_recent_posts == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_recent_posts == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Recent Comments</th>
        <td><select name="gaia_sab_options[recent_comments]">
            <?php $gaia_recent_comments = $gaia_sab_options['recent_comments'];?>
            <option value="show" <?php if ($gaia_recent_comments == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_recent_comments == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">RSS</th>
        <td><select name="gaia_sab_options[rss]">
            <?php $gaia_rss = $gaia_sab_options['rss'];?>
            <option value="show" <?php if ($gaia_rss == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_rss == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Tag Cloud</th>
        <td><select name="gaia_sab_options[tag_cloud]">
            <?php $gaia_tag_cloud = $gaia_sab_options['tag_cloud'];?>
            <option value="show" <?php if ($gaia_tag_cloud == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_tag_cloud == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Custom Menu</th>
        <td><select name="gaia_sab_options[custom_menu]">
            <?php $gaia_custom_menu = $gaia_sab_options['custom_menu'];?>
            <option value="show" <?php if ($gaia_custom_menu == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_custom_menu == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
    </table>
    <h2 class="form-table-meta gaiasab">Post Meta Info</h2>
    <table class="form-table-meta gaiasab">
      <tr valign="top">
        <th scope="row">Post Custom</th>
        <td><select name="gaia_sab_options[post_custom]">
            <?php $gaia_post_custom = $gaia_sab_options['post_custom'];?>
            <option value="show" <?php if ($gaia_post_custom == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_post_custom == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Trackbacks</th>
        <td><select name="gaia_sab_options[trackbacks]">
            <?php $gaia_trackbacks = $gaia_sab_options['trackbacks'];?>
            <option value="show" <?php if ($gaia_trackbacks == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_trackbacks == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Comment Status</th>
        <td><select name="gaia_sab_options[comment_status]">
            <?php $gaia_comment_status = $gaia_sab_options['comment_status'];?>
            <option value="show" <?php if ($gaia_comment_status == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_comment_status == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Comments</th>
        <td><select name="gaia_sab_options[comments_div]">
            <?php $gaia_comments_div = $gaia_sab_options['comments_div'];?>
            <option value="show" <?php if ($gaia_comments_div == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_comments_div == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
      <tr valign="top">
        <th scope="row">Tags</th>
        <td><select name="gaia_sab_options[tags_div]">
            <?php $gaia_tags_div = $gaia_sab_options['tags_div'];?>
            <option value="show" <?php if ($gaia_tags_div == 'show') { echo 'selected="selected"'; } ?>>Show</option>
            <option value="hide" <?php if ($gaia_tags_div == 'hide') { echo 'selected="selected"'; } ?>>Hide</option>
          </select></td>
      </tr>
    </table>
    <h2 class="form-table-css gaiasab">Custom CSS</h2>
    <table class="form-table-css gaiasab">
      <tr scope="row">
        <th>Login Logo (326 x 67px is the default)</th>
        <td><input type="text" name="gaia_sab_options[login_logo]" value="<?php echo $gaia_sab_options['login_logo']; ?>" /></td>
      </tr>
      <tr scope="row">
        <th>Login Logo Width (with 'px')</th>
        <td><input type="text" name="gaia_sab_options[login_logo_w]" value="<?php echo $gaia_sab_options['login_logo_w']; ?>" /></td>
      </tr>
      <tr scope="row">
        <th>Login Logo Height (with 'px')</th>
        <td><input type="text" name="gaia_sab_options[login_logo_h]" value="<?php echo $gaia_sab_options['login_logo_h']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th>Login Background Color HEX key with '#'</th>
        <td><input type="text" name="gaia_sab_options[login_color]" value="<?php echo $gaia_sab_options['login_color']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th>Login Background Image</th>
        <td><input type="text" name="gaia_sab_options[login_image]" value="<?php echo $gaia_sab_options['login_image']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th>Login Background Image Position (top right, bottom left, etc... or %'s)</th>
        <td><input type="text" name="gaia_sab_options[login_image_position]" value="<?php echo $gaia_sab_options['login_image_position']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Background Image Repeat</th>
        <td><select name="gaia_sab_options[login_image_repeat]">
            <?php $gaia_login_image_repeat = $gaia_sab_options['login_image_repeat'];?>
            <option value="no-repeat" <?php if ($gaia_login_image_repeat == 'no-repeat') { echo 'selected="selected"'; } ?>>No Repeat</option>
            <option value="repeat" <?php if ($gaia_login_image_repeat == 'repeat') { echo 'selected="selected"'; } ?>>Repeat</option>
            <option value="repeat-x" <?php if ($gaia_login_image_repeat == 'repeat-x') { echo 'selected="selected"'; } ?>>Repeat-X</option>
            <option value="repeat-y" <?php if ($gaia_login_image_repeat == 'repeat-y') { echo 'selected="selected"'; } ?>>Repeat-Y</option>
          </select></td>
      </tr>
    </table>
    <h2 class="form-table-admin-style gaiasab">Admin Styles</h2>
    <table class="form-table-admin-style gaiasab">
      <tr valign="top">
        <th>Admin Logo (in the top left 20 x 20px)</th>
        <td><input type="text" name="gaia_sab_options[admin_logo]" value="<?php echo $gaia_sab_options['admin_logo']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th>Admin Footer Text (No HTML)</th>
        <td><textarea name="gaia_sab_options[admin_footer]"><?php echo $gaia_sab_options['admin_footer']; ?></textarea></td>
      </tr>

      <tr valign="top">
        <th>Admin HTML / BODY background color (HEX code with #)</th>
        <td><input type="text" name="gaia_sab_options[admin_html_background]" value="<?php echo $gaia_sab_options['admin_html_background']; ?>" /></td>
      </tr>

      <tr valign="top">
        <th>Admin postbox background color (HEX code with #)</th>
        <td><input type="text" name="gaia_sab_options[admin_postbox_background]" value="<?php echo $gaia_sab_options['admin_postbox_background']; ?>" /></td>
      </tr>

      <tr valign="top">
        <th>Admin Menu Backgound Color (HEX code with #)</th>
        <td><input type="text" name="gaia_sab_options[admin_menu_back]" value="<?php echo $gaia_sab_options['admin_menu_back']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th>Admin Menu Link Color (HEX code with #)</th>
        <td><input type="text" name="gaia_sab_options[admin_menu_link]" value="<?php echo $gaia_sab_options['admin_menu_link']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th>Admin Menu Link Hover Color (HEX code with #)</th>
        <td><input type="text" name="gaia_sab_options[admin_menu_hover]" value="<?php echo $gaia_sab_options['admin_menu_hover']; ?>" /></td>
      </tr>


      


      <tr valign="top">
        <th>Admin Menu Border Top Color (HEX code with #)</th>
        <td><input type="text" name="gaia_sab_options[admin_menu_border_top]" value="<?php echo $gaia_sab_options['admin_menu_border_top']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th>Admin Menu Border Bottom Color (HEX code with #)</th>
        <td><input type="text" name="gaia_sab_options[admin_menu_border_bottom]" value="<?php echo $gaia_sab_options['admin_menu_border_bottom']; ?>" /></td>
      </tr>
    </table>
    <p class="submit">            
      <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
  </form>
</div>