<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Get asset URL
 *
 * @access  public
 * @return  string
 */


if ( ! function_exists('asset_url'))
{
    function asset_url()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        //return the full asset path
        return base_url() . $CI->config->item('asset_path');
    }
}

if ( ! function_exists('css_url'))
{
    function css_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('css_path');
    }
}



if ( ! function_exists('admin_css_url'))
{
    function admin_css_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_css_path');
    }
}




if ( ! function_exists('js_url'))
{
    function js_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('js_path');
    }
}

if ( ! function_exists('admin_js_url'))
{
    function admin_js_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_js_path');
    }
}



if ( ! function_exists('img_url'))
{
    function img_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('img_path');
    }
}


if ( ! function_exists('admin_img_url'))
{
    function admin_img_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_img_path');
    }
}

/**
 * Get Upload URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('upload_url'))
{
    function upload_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('upload_path');
    }
}



// ------------------------------------------------------------------------
// PATH HELPERS

/**
 * Get asset Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('asset_path'))
{
    function asset_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('asset_path');
    }
}



/* End of file asset_helper.php */
