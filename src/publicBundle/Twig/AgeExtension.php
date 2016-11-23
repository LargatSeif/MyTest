<?php
namespace publicBundle\Twig;

class AgeExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('age', [$this, 'ageCalculate']),
        );
    }

    public function ageCalculate(\DateTime $bithdayDate)
    {
        $now = new \DateTime('now');
        $interval = $now->diff($bithdayDate);
        if($interval->y == 1){
            return $interval->y.' an ,'.$interval->m.' mois et '.$interval->d .' jours';
        }elseif($interval->y >1){
            return $interval->y. ' ans ,'.$interval->m.' mois et '.$interval->d .' jours';
        }elseif($interval->y == 0){
            return $interval->m.' mois et' .$interval->d .' jours';
        }
        return false;
    }

    public function getName()
    {
        return 'age_extension';
    }
}