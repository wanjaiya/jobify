<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    //
    

    protected $fillable = ['user_id', 'professional_headline', 'professional_summary', 'years_experience', 'salary_currency', 'salary_expectation', 'linkedin','github'];


        public static function getCurrencies()
    {
        $levels = array(
         array('id' => 'Ksh' ,'name'=>'KSH'),
         array('id' => 'Usd', 'name'=>'USD'),
          );
        return $levels;
    }

    public static function getExperience(){
        $experience = array(
             array('id' => '0-1','name'=>'0-1 years'),
                  array('id' => "1-3",'name'=>'1-3 years'),
                  array('id' => "3-5",'name'=>'3-5 years'),
                  array('id' => "5-7",'name'=>'5-7 years'),
                  array('id' => "7-10",'name'=>'7-10 years'),
                  array('id' => "10+",'name'=>'10+ years'),
        );

        return $experience;
    }

}
