<?php 

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
add_theme_support( 'post-thumbnails' );


/*add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('products', array(
		'labels' => array(
			'name'               => 'Products', // основное название для типа записи
			'singular_name'      => 'Product', // название для одной записи этого типа
			'add_new'            => 'Add product', // для добавления новой записи
			'add_new_item'       => 'Add product', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit product', // для редактирования типа записи
			'new_item'           => 'New product', // текст новой записи
			'view_item'          => 'Show product', // для просмотра записи этого типа.
			'search_items'       => 'Seacrh product', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Products', // название меню
		),
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}