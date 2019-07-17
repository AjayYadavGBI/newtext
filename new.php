<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
/*
# I am just trying to do something there  is a lot of thing is going in my mind i don't know
# we need to understand a lot of thing like controling  over the mind and learning new things. there a lot  w things which 
# need to be learnt everyday. why i am unable to controling my mind if i say truth i don't know i am trying to learn new 
# tingh everyday but one thing is desterbing my mind that is my mind which is really controlling over the mind the finst 
# thing is to keep busy yourself because this is the thing which can give a lot of thing.....


*/
{
  public  function user(){
      return $this->belongsTo(User::class);
  }
    public  function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}





