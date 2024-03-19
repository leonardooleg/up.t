<?php
    $url = 'https://www.upwork.com/ab/feed/jobs/rss?ontology_skill_uid=996364628025274385&paging=0%3B50&sort=recency&api_params=1&q=&securityToken=463c11194d34845a765ee510807138d3f21b244c448c9cb2e646d2d2aed6f2ca63e29dac9d2dd3de990357bfc2018ebadeb67548a9dab7f2f6353c982f8ee0c2&userUid=424330879939231744&orgUid=424330879939231746';
    $xml = file_get_contents($url);
    echo $xml;

