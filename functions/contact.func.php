<?php


    function contact_users($nomcomplet, $telephone, $email, $adresse, $contenumessage)
    {
       global $db;
      $table = [
              'nomcomplet' => $nomcomplet,
              'telephone' => $telephone,
              'email' => $email,
              'adresse' => $adresse,
              'contenumessage' => $contenumessage


      ] ;

      $sql = "INSERT INTO messages(m_nomcmoplet,m_telephone, m_email,m_adresse,m_contenu,m_date_heure_edition) VALUES(:nomcomplet,:telephone,:email,:adresse,:contenumessage, NOW())";
      $req= $db->prepare($sql);
      $req->execute($table);
    }


 ?>
