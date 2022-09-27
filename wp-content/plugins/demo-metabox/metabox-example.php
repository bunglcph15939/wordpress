<?php


 /**
 * Plugin Name: demo meta
 * Plugin URI: abc.xyz // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi.
 * Version: 1.0 
 * Author: lcb // Tên tác giả, người thực hiện plugin này
 * Author URI: http://sauhi.com 
 * License: GPLv2 
 */
function bung_meta_box(){
    add_meta_box('thong-tin','thong-tin-ung-dung','abc_thong_tin_output','post');

}
add_action('add_meta_boxes','bung_meta_box');
function abc_thong_tin_output($post){
    //tạo trường link dowload
    $link_dowload=get_post_meta($post->ID,'_link_dowload',true);
    $option=get_post_meta($post->ID,'_option',true);
    echo ('<label for="link_dowload">link dowload:</label>');
    echo ('<input type="text"id="link_dowload"name="link_dowload" value="'.$link_dowload.'">');
    echo ('<label for="age"> age:</label>');

   if($option==2){
    echo('<select name="option"> 
    <option value="1">1</option> 
    <option value="2" selected>2</option>
      </select>');
   }else{
   echo('<select name="option"> 
   <option value="1"selected>1</option> 
   <option value="2" >2</option>
     </select>');
   }
 
    
}
function bungbung_save($post_id){
    $link_dowload=sanitize_text_field($_POST['link_dowload']);
    $option=$_POST['option'];
    update_post_meta($post_id,'_option',$option);
    update_post_meta($post_id,'_link_dowload',$link_dowload);
}
add_action('save_post','bungbung_save');