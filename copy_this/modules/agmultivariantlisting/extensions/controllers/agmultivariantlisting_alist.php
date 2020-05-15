<?php

class agmultivariantlisting_alist extends agmultivariantlisting_alist_parent {

  public function getajaxvariantselections () {
    $config = $this->getConfig();
    $article = oxNew('oxarticle');

    if ($article->load($config->getRequestParameter('aid'))){
      $selections = $article->getVariantSelections($config->getRequestParameter('varsel'));
      header('Content-Type: application/json');
      echo json_encode($selections);
    }
    exit();
  }

}