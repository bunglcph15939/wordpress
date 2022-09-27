<?php
 /**
 * Plugin Name: demo widget
 * Plugin URI: abc.xyz 
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi.
 * Version: 1.0 
 * Author: lcb 
 * Author URI: http://sauhi.com 
 * License: GPLv2 
 */

 add_action('widgets_init','create_bungbung_widget');
 function create_bungbung_widget(){
    register_widget('Bung_Widget');
 }

 class Bung_Widget extends WP_Widget{
    //thiết lập thông tin mô tả widget
    function __construct(){
        parent::__construct(
            'bungbung_widget',//id widget
            'TP Widget',//Tên widget
            array(
                'description'=>'Đây là widget demo'
            )
            );

    }
    function form($instance){ //hiển thị lên màn hình
        $default = array(
            'title' => 'Tên của bạn'
        );
        $instance = wp_parse_args( (array) $instance, $default);//Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
        $title = esc_attr( $instance['title'] );//Tạo biến riêng cho giá trị mặc định trong mảng $default
        echo "Nhập tiêu đề <input class='widefat' type='text' name='".$this->get_field_name('title')."' value='".$title."' />";
    }
    function update($new_instance,$old_instance){
        // parent::update( $new_instance, $old_instance );

		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']); //hàm sreip_tags để giữ cho form không thực thi php html
		return $instance;
    }
    function widget($agrs,$instance){

    }
 }
?>

