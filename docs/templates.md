# Templates

## The keywords template

This is similar to the page template, but we add the following code in order to show all keywords:

```php

// Produce a list of all existing Tags

$tags = get_tags();

$html = '';

$counter = 1;

foreach ( $tags as $tag ) {
	
	$tag_link = get_tag_link( $tag->term_id );
			
	$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
	$html .= "{$tag->name}</a>";
	
	if ( $counter === count($tags) ) {
		// echo 'LAST';
	
	} else {
		$html .= ', ';
	}
	
	$counter++;

}

echo $html;

```

***

## The Parent - Child relation  

We use a custom function, `designbriefs_no_parents()`, in functions.php

We query only for parent pages by requesting: Parent=0 (a child-page would have the ID of the parent).

For more info, read: https://ms-studio.net/notes/wordpress-content-relationships/