<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = $site->search($query, 'title|text');

  return array(
    'query'   => $query,
    'results' => $results,
  );

};