<?php 

// Banner
	get_template_part('/template-parts/Round4/page-author/section-banner/banner');
// iNFO
	get_template_part('/template-parts/Round4/page-author/section-info/info');
	
// Album
if(isMobileDevice()){
	get_template_part('/template-parts/Round4/page-author/section-album/album_mobile');
}else {
	get_template_part('/template-parts/Round4/page-author/section-album/album_desktop');
}
	
// Banner
	get_template_part('/template-parts/Round4/page-author/section-article/article');