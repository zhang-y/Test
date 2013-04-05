<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <title>Jobeet</title>
    <subtitle>Latest Jobs</subtitle>
    <link href="" rel="self"/>
    <link href=""/>
    <updated></updated>
    <author>
        <name>Jobeet</name>
    </author>

    <id><?php echo sha1(url_for('job', array('sf_format' => 'atom'), true)) ?></id>

    <?php foreach ($categories as $category): ?>
        <?php include_partial('job/list', array('jobs' => $category->getActiveJobs(sfConfig::get('app_max_jobs_on_homepage')))) ?>
    <?php endforeach ?>
</feed>