<?php
    require('connexion.php');

function ajouterMedia($nom, $typeImg, $img){
    try {
        $db = connexion();
        $stm = $db->prepare('INSERT INTO `media`(`nom`, `type`, `image`) 
        VALUES (:NOM,:TYPEIMG,:IMG)');
        $stm->execute(
            array(
                ':NOM' => $nom,
                ':TYPEIMG' => $typeImg,
                ':IMG' => $img
            )
        );
    return true;
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        return false;
    }
}

function ajouterPost($commentaire)
{
    try {
        $db = connexion();
        $stm = $db->prepare('INSERT INTO `post`(`commentaire`,`date`) VALUES (:COMM,:DATE)');

        $stm->execute(
            array(
                ":COMM" => $commentaire,
                ":DATE" => date("Y-m-d")
            )
        );
        return true;
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        return false;
    }
}

function ajouterPost_Media($idPost,$idMedia){

    try {  
      $db = connexion();
      $stm = $db->prepare("INSERT INTO post_media (`idPost`,`idMedia`) VALUES (:IDMEDIA,:IDPOST)");
      $stm->execute(
          array(
            ':IDPOST' => $idPost,
              ':IDMEDIA' => $idMedia
          )
      );
      return true;
    } catch (Exception $e) {
          echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
    return false;
}

function addNewPost($comm, $imgName,$imgType,$imgContent)
{
  $db = connexion();
  $db->beginTransaction();
  $idPost = ajouterPost($comm);
  if ($idPost == false){
    $db->rollBack();
    return false;
  }
  $idMedia = ajouterMedia($imgName,$imgType,$imgContent);
  if ($idMedia == false){
    $db->rollBack();
    return false;
  }

  if (ajouterPost_Media($idPost,$idMedia) == false){
    $db->rollBack();
    return false;
  }

  $db->commit();
  return true;
}





?>
