<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>
<p>The University of Virginia Library is building an archive of materials surrounding the “Unite the Right” rally and counter-protests during the weekend of 8/12/17. Recognizing this event as one of national importance, we are interested in your submissions of photos, audio, video, etc., from the events at UVA and in the Charlottesville area. 
</p>
<p>Materials will be catalogued, curated, and made available for future public study. You have the option to keep your submission anonymous if you wish.
</p>
<p>Want to donate your media? Great! Please use our <a href="<?php echo url('contribution'); ?>">contribution form</a> to submit your material to the archive.</p>
<p>If you have a large number of items, or large-sized files to contribute:</p>
<ul>
<li>The best way to submit materials is through the form below. If your file is too big to upload, please contact us at digitalcollecting@virginia.edu and we’ll be happy to help.</li>
<li>If you have a large number of files to submit, and your files are already on the web, you can use this form to provide us with a URL for the album or file location (i.e. Dropbox folder, Flickr album, etc.).</li> 
<li>Note: We will make our best effort to capture media submitted through the linked form above but, due to high volume, we cannot fully commit to scraping all materials received in this way. </li>
</ul>
<h2>Statement of values</h2> 
<p>The University of Virginia stands firmly behind the Society of American Archivists’ commitment to ensuring the diversity of archivists and the archival record. Read more about our commitment to diversity and inclusion. </p>

    <?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>
