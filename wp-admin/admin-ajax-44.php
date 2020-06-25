var calScreenWidth = jQuery(window).width();
var imgFlowSize = 0.6;
if(calScreenWidth > 480)
{
imgFlowSize = 0.4;
}
else
{
imgFlowSize = 0.2;
}
imf.create("imageFlow", 'https://themes.themegoods.com/photography/demo3/wp-admin/admin-ajax.php?action=photography_script_image_portfolio_flow', 0.6, 0.4, 0, 10, 8, 4);

